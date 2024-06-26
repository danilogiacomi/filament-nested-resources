<?php

namespace Guava\FilamentNestedResources\Actions;

use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

trait NestedEditAction
{
    protected function configureEditAction(Tables\Actions\EditAction $action): void
    {
        parent::configureEditAction($action);

        $action->url(
            fn (Model $record) => $this->getNestedResource($record)::getUrl(
                'edit',
                ['record' => $record],
            )
        );
    }
}
