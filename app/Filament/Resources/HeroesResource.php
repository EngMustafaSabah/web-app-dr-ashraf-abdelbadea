<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroesResource\Pages;
use App\Filament\Resources\HeroesResource\RelationManagers;
use App\Models\Heros;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroesResource extends Resource
{
    protected static ?string $model = Heros::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('title')->label(__('Title'))->translateLabel(),
                    Forms\Components\SpatieMediaLibraryFileUpload::make('heroes')->label("Image")
                        ->collection('heroes'),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label(__('Title'))->sortable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('heroes')->label("Image"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHeroes::route('/create'),
            'edit' => Pages\EditHeroes::route('/{record}/edit'),
        ];
    }
}
