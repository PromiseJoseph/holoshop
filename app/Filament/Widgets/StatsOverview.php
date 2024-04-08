<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '5s';

    public function lastUserNum() 
    {

    }

    //widget on admin page for users
    public function users() : int
    {
        return User::select('id')->count();
    }
    protected function getCards(): array
    {
    
        return [

            Card::make(' New Users','  ' .$this->users())
            ->color('success')
            ->description($this->users().'% increase')
            ->chart([0,$this->users()])
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Bounce rate', $this->lastUserNum()),
            Card::make('Average time on page', '3:12'),

        ];
    }
}
