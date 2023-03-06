<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Participants;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ParticipantsResource\Pages;
use App\Filament\Resources\ParticipantsResource\RelationManagers;
use App\Filament\Resources\ParticipantsResource\Widgets\ParticipantStatsOverview;

class ParticipantsResource extends Resource
{
    protected static ?string $model = Participants::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $title = 'Custom Page Title';

    // protected static ?string $navigationLabel = 'Custom Navigation Label';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('session')
                    ->required()
                    ->options([
                        'Building Supportive Communities for Women in Tech'=>'Building Supportive Communities for Women in Tech',
                        'Digital Skills for Female Entrepreneurs'=>'Digital Skills for Female Entrepreneurs',
                        'Cybersecurity and Artificial Intelligence'=>'Cybersecurity and Artificial Intelligence',
                        'Breaking the Glass Ceiling in Tech Careers'=>'Breaking the Glass Ceiling in Tech Careers',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('session')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->sortable()
                    ->searchable()
                    ->dateTime(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ParticipantStatsOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListParticipants::route('/'),
            'create' => Pages\CreateParticipants::route('/create'),
            'edit' => Pages\EditParticipants::route('/{record}/edit'),
        ];
    }
}
