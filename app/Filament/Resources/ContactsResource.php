<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use App\Models\Contacts;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactsResource extends Resource
{
    protected static ?string $model = Contacts::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('patient_id')->label(__("Patient"))
                    ->options(function () {
                        return Patient::all()->pluck('name', 'id');
                    }),
                Forms\Components\Textarea::make('message')->label(__("Message")),

                Forms\Components\Select::make('status')->label(__("Status"))
                    ->options(function () {
                        return ["pending"=>'pending','contacted'=>"contacted"];
                    }),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('patient.name')->label(__("Patient"))->sortable(),
                Tables\Columns\TextColumn::make('message')->sortable()->label(__("Message")),
                Tables\Columns\BadgeColumn::make('status')->label(__("Status"))
                    ->color(static function ($state): string {
                        if ($state === 'contacted') {
                            return 'success';
                        }
                        return 'warning';
                    })
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
