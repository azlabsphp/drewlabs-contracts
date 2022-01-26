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
