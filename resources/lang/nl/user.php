<?php

    return [
        'account'     =>
            [
                'title'                     => 'Mijn account',
                'current_password_invalid'  => 'Het huidige wachtwoord is incorrect.',
                'updated'                   => 'Accountinformatie bijgewerkt.',
                'username'                  => 'Gebruikersnaam',
                'email'                     => 'Email-adres',
                'current_password'          => 'Huidige wachtwoord',
                'new_password'              => 'Nieuw wachtwoord',
                'new_password_confirmation' => 'Bevestig nieuw wachtwoord',
                'save'                      => 'Opslaan',
                'delete'                    => 'Verwijder uw account',
                'delete_confirmation'       => 'Weet u zeker dat u uw account wil verwijderen van :site? Dit kan niet ongedaan worden gemaakt.',
                'deletion_warning'          => 'Waarschuwing: Het verwijderen van uw account kan NIET ongedaan worden gemaakt.',
                'type'                      => 'Accounttype',
                'created_at'                => 'Account aangemaakt op',
                'last_login'                => 'Laatste login',
                'last_login_from'           => ':timestamp vanaf :ip',
                'errors_occurred'           => 'Er is een fout opgetreden.|Er zijn meerdere fouten opgetreden.',
                '2fa'                       =>
                    [
                        'title'                => 'Tweeledige verificatie',
                        'off'                  => 'Uit',
                        'on'                   => 'Aan',
                        'disabled'             => 'Tweeledige verificatie (tweestaps authenticatie) is momenteel uitgeschakeld. Schakel dit in om uw account beter te beveiligen.
Het is hierdoor alleen mogelijk om in te loggen op uw account met uw inlognaam, wachtwoord en speciale code die om de 30 seconden verandert. Deze code wordt gegenereerd door een app op een van uw mobiele apparaten. Het is geheel kosteloos om dit in te schakelen en te gebruiken.',
                        'enabled'              => 'Tweeledige verificatie is momenteel ingeschakeld. Uw account is goed beveiligd.',
                        'enable'               => 'Inschakelen',
                        'disable'              => 'Uitschakelen',
                        'missing_key'          => 'Code ontbreekt',
                        'key'                  => 'Code',
                        'validate'             => 'Valideren',
                        'instructions'         => 'Scan de QR-code met een authenticatie-app op een mobiel apparaat om vervolgens de tijdelijke toegangscodes te verkrijgen.
Deze code verandert elke 30 seconden. Als je de QR-code hebt gescand, voer dan de gegenereerde code in en druk op valideren.
Bekende authenticatie-apps zijn OTP Auth voor iOS, Google Authenticator voor Android en Authenticator voor Windows Phone.',
                        'success'              => 'Tweeledige verificatie ingeschakeld',
                        'success_instructions' => 'Tweeledige verificatie is succesvol ingesteld voor uw account. U kan nu nog de QR-code scannen voor gebruik op meerdere apparaten of apps.',
                        'has_been_disabled'    => 'Tweeledige verificatie is nu uitgeschakeld',
                        'disable_warning'      => 'Om tweeledige verificatie opnieuw in te schakelen, zal u al uw apparaten opnieuw moeten instellen',
                        'missing_secret'       => 'Geheime sleutel mist in aanvraag',
                        'invalid_key'          => 'Code ongeldig',
                    ],
                'upload_token_reset'        => 'De upload-token is gereset',
                'upload_token'              => 'Upload-token',
                'upload_token_warning'      => 'Deze upload-token is gekoppeld aan jouw account en dient als geheim te worden beschouwd. Deel deze code net zo min als dat je je wachtwoorden zou delen! Deze code is vereist om afbeeldingen te uploaden zonder ingelogd te zijn op de website, bijvoorbeeld door een applicatie.',
                'reset_upload_token'        => 'Reset upload-token',
                'images_on_account'         => 'Afbeeldingen van gebruiker',
                'images'                    => ':amount afbeeldingen',
            ],
        'rank'        =>
            [
                'member' => 'Gebruiker',
                'admin'  => 'Administrator',
            ],
        'preferences' =>
            [
                'updated'                               => 'Voorkeuren bijgewerkt',
                'title'                                 => 'Voorkeuren',
                'embed_name'                            => 'Weergavenaam bij ingesloten afbeeldingen',
                'embed_name_help'                       => 'In verschillende chatapplicaties zoals Discord en Slack kunnen afbeeldingen al worden weergegeven in de applicatie zelf. Hierbij komt ook de naam van de auteur te staan. Deze naam is aanpasbaar.',
                'embed_name_url'                        => 'URL gekoppeld aan ingesloten naam',
                'embed_name_url_help'                   => 'Wanneer de naam van de auteur wordt weergegeven, is het mogelijk om deze te koppelen aan een aangepaste URL voor wanneer men op deze naam klikt.',
                'twitter_username'                      => 'Twitter-gebruikersnaam',
                'twitter_username_help'                 => 'Het is mogelijk om links naar afbeeldingen te delen op Twitter. Deze zullen dan worden weergegeven in Twitter-cards. Het is mogelijk om deze cards te linken aan je eigen Twitter-account.',
                'save'                                  => 'Opslaan',
                'default_url_exclude_gallery_extension' => 'Standaard URL direct naar afbeelding',
                'default_url_include_gallery_extension' => 'Standaard URL naar voorvertoning van afbeelding',
                'default_url_help'                      => 'Het is mogelijk om na het uploaden van een afbeelding direct een URL te krijgen naar de afbeelding zelf, of naar een voorvertoningspagina welke de afbeelding bevat.',
                'no_domains_available'                  => 'Geen domeinnamen beschikbaar',
                'domain_not_found'                      => 'Dit domein kan niet worden gevonden',
                'default_domain'                        => 'Standaard domein',
                'default_deletion_time'                 =>
                    [
                        'name'    => 'Standaard verwijderen na tijdsverloop',
                        'minutes' => 'Minuten',
                        'hours'   => 'Uren',
                        'days'    => 'Dagen',
                        'months'  => 'Maanden',
                        'years'   => 'Jaren',
                        'help'    => 'Het is mogelijk om geüploade afbeeldingen automatisch na een bepaald verloop van tijd te laten verwijderen. Als je alle velden op 0 zet, staat deze functie uit.
Het is mogelijk om de automatische verwijdertijd per afbeelding later aan te passen.',
                    ],
            ],
    ];
