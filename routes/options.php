<?php

use App\Http\Controllers\OptionsController;
use Illuminate\Support\Facades\Route;

Route::get('/getting-started', [OptionsController::class, 'gettingStarted']);
Route::get('/declarative-rendering', [OptionsController::class, 'declarativeRendering']);
Route::get('/attribute-bindings', [OptionsController::class, 'attributeBindings']);
Route::get('/event-listeners', [OptionsController::class, 'eventListeners']);
Route::get('/form-bindings', [OptionsController::class, 'formBindings']);
Route::get('/conditional-rendering', [OptionsController::class, 'conditionalRendering']);
Route::get('/list-rendering', [OptionsController::class, 'listRendering']);
Route::get('/computed-property', [OptionsController::class, 'computedProperty']);
Route::get('/lifecycle', [OptionsController::class, 'lifecycle']);
Route::get('/watch', [OptionsController::class, 'watch']);
Route::get('/component', [OptionsController::class, 'component']);
Route::get('/props', [OptionsController::class, 'props']);
Route::get('/emits', [OptionsController::class, 'emits']);
Route::get('/slot', [OptionsController::class, 'slot']);
