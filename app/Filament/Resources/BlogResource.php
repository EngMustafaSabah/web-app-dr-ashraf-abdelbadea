<?php

namespace App\Filament\Resources;
use Filament\Resources\Concerns\Translatable;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
use RalphJSmit\Filament\SEO\SEO;
use Spatie\Translatable\HasTranslations;


class BlogResource extends Resource
{    use HasTranslations;

    public static function getTranslatableLocales(): array
    {
        return [ 'ar'];
    }

    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')->label(__('Title'))->translateLabel(),
            Forms\Components\Textarea::make('short_description')->label(__('Short Description'))->translateLabel(),
            Forms\Components\RichEditor::make('description')->label(__('Description'))->translateLabel(),
            Forms\Components\Toggle::make('is_visible')->label(__("Visibility")),
            Forms\Components\SpatieMediaLibraryFileUpload::make('blog_image')->label("Image")
                ->collection('blog_image'),

            Forms\Components\Card::make([
                SEO::make()
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('title')->label(__('Title'))->sortable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('blog_image')->label("Image")
                ,
                Tables\Columns\BadgeColumn::make('is_visible')->label(__("Visibility"))
                    ->color(static function ($state): string {
                        if ($state) {
                            return 'success';
                        }
                        return 'danger';
                    })


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('id');

    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
