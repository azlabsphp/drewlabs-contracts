# Package change logs

## v202201022040

- Deprecated [Observable\IEvent] in favour of [Observable\Producer] interface
- Deprecated [Observable\ISubscriber] in favour of [Observable\Observer] interface

## v202201022051

- Added [OAuth\PersonalAccessToken] interface
- Added [OAuth\PersonalAccessTokenFactory] interface
- Added [OAuth\Token] interface
- Added [OAuth\RefreshToken] interface
- Deprecated [Validator::setUpdate] method

## v2022010520070

- Replaced [OAuth\ValidatorWithNextCallbackInterface] with [Validator\ExceptionalValidator]

## v2022010820080

- Removed deprecated [Notification\ISmsNotifier]
- Removed deprecated [Notification\INotificationJobProvider]
- Removed deprecated [Auth\IUserAccountModel]
- Added [Notification\AttachmentsNotification]

## v2022010820082

- Added HasAbilities and HasApiTokens interfaces

## v2022010820083

- Added AccessTokenBridge interface

## v202201262110

- Deprecated [\Drewlabs\Contracts\Auth\IDrewlabsNotifiable]
- Deprecated [\Drewlabs\Contracts\Auth\IDrewlabsAuthorizable]
- Deprecated [\Drewlabs\Contracts\Auth\IVerifiable]
- Change getLabel and getID method in [\Drewlabs\Contracts\Auth\AuthorizationInterface] by [label()] and [id()] methods

## v202201262210

- Removed [\Drewlabs\Contracts\Auth\IDrewlabsNotifiable]
- Removed [\Drewlabs\Contracts\Auth\IDrewlabsAuthorizable]
- Removed [\Drewlabs\Contracts\Auth\IVerifiable]

## v202201262211

- Added [\Drewlabs\Contracts\Auth\UserManager] and [\Drewlabs\Contracts\Auth\AuthManager] interfaces

## v202203072212

- Added [\Drewlabs\Contracts\Auth\NotificationChannelsAware] interface
- Modify TokenManager interface declarations
- Add parameters to addChannel method indicating whether the channel is the default channel or not

## [2.4.0] 2022-03-29

- Deprecated Relatable interface
- Added HasRelations and HidesAttributes interface
- Deprecate `GuardedModel::getGuardedAttributes()` method in favor of `GuardedModel::getGuarded()` method
- Deprecate `Parseable::getFillables()` method in favor of `Parseable::getFillable()` method
- Add `Parseable::fillable()` method
- Deprecated `DataProvidedInterface::class`, `ModelFiltersInterface::class`, `MultiValidationRulesHandlerInterface::class`, `ParseableModelRepository::class`
- Removed replaced `DataProviderQueryResultInterface::class`, `WithHiddenAttributesModelInterface::class`

## [2.5.0] 2022-04-12

- Deprecated getModelRelationLoadersNames method definition in HasRelations interface
- Added VieeModel Interface