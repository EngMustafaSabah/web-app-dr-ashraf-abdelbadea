<?php

namespace App\Models;

use App\Filament\Resources\ServiceCategoryResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model
{
    use HasFactory;
    public $translatable = ['title','short_description','description'];
    protected $guarded=[];


    public function serviceCategory(){
        return $this->belongsTo(ServiceCategory::class,"service_category_id","id");
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('service_image')->singleFile()
            ->withResponsiveImages();
//        $this->addMediaCollection('blog_seo_image')->singleFile()
//            ->withResponsiveImages();
    }

    /**
     * @param Media|null $media
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 200, 200)
            ->withResponsiveImages()
            ->sharpen(10);

        $this->addMediaConversion('icon')
            ->fit(Manipulations::FIT_CROP, 100, 100)
            ->withResponsiveImages()
            ->sharpen(10);
    }


}
