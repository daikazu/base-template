<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\confirm;
use function Laravel\Prompts\info;
use function Laravel\Prompts\multiselect;
use function Laravel\Prompts\note;
use function Laravel\Prompts\text;

class Init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup various website settings on a fresh install.';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $siteConfig = [];

        info('Welcome to the setup wizard!');

        $siteConfig['domain'] = text(
            label: 'What is your domain name?',
            placeholder: 'example.com',
            required: true);

        $siteConfig['name'] = text(
            label: 'What is your website name?',
            placeholder: 'My Website',
            required: true,

        );

        $siteConfig['description'] = text(
            label: 'What is your website description or subtitle?',
            placeholder: 'A short description of your website.',
            required: true,

        );

        $siteConfig['email'] = text(
            label: 'What is your website email address?',
            placeholder: 'email@example.com',
            required: true,
            validate: fn (string $value) => $this->validate($value, 'email', 'email'),
        );

        $websitePhone = text(
            label: 'What is your website phone number?',
            placeholder: '555-555-5555',
            required: true,
            validate: fn (string $value) => $this->validate($value, 'phone', 'phone:US'),
        );

        $siteConfig['phone'] = phone($websitePhone, 'US')->formatE164();

        $siteConfig['creation_year'] = text(
            label: 'What year was your website created?',
            placeholder: '2024',
            default: date('Y'),
            required: true
        );

        $socialPlatforms = multiselect(
            label: 'Which social media platforms do you use?',
            options: [
                'facebook' => 'Facebook',
                'instagram' => 'Instagram',
                'youtube' => 'YouTube',
                'x' => 'X',
                'linked_in' => 'LinkedIn',
                'pinterest' => 'Pinterest',
                'tiktok' => 'TikTok',
            ]
        );

        if (! empty($socialPlatforms)) {
            foreach ($socialPlatforms as $platform) {
                $siteConfig['social'][$platform] = text(
                    label: "What is your {$platform} username?",
                    placeholder: 'example',
                    required: true
                );
            }
        }

        $parentCompanySetup = false;
        $localBusinessSetup = false;

        $companySetup = confirm(
            label: 'Would you like to setup your company information?',
            default: true,
            hint: 'This is used for organization schema markup.',
        );

        if ($companySetup) {
            $company = [
                'same_as' => [],
            ];

            $company['name'] = text(
                label: 'What is your company name?',
                default: $siteConfig['name'],
                required: true
            );

            $company['description'] = text(
                label: 'What is your company description?',
                default: $siteConfig['description'],
                required: true
            );

            $company['email'] = text(
                label: 'What is your company email address?',
                default: $siteConfig['email'],
                required: true,
                validate: fn (string $value) => $this->validate($value, 'email', 'email'),
            );

            $company['phone'] = text(
                label: 'What is your company phone number?',
                default: $siteConfig['phone'],
                required: true,
                validate: fn (string $value) => $this->validate($value, 'phone', 'phone:US'),
            );

            $company['fax'] = text(
                label: 'What is your company fax number?',
                required: true,
                validate: fn (string $value) => $this->validate($value, 'fax', 'phone:US'),
            );

            $company['address']['street'] = text(
                label: 'What is your company street address?',
                required: true
            );

            $company['address']['city'] = text(
                label: 'What is your company city?',
                required: true
            );

            $company['address']['state'] = text(
                label: 'What is your company state?',
                required: true
            );

            $company['address']['zipcode'] = text(
                label: 'What is your company zipcode?',
                required: true
            );

            $company['address']['country'] = text(
                label: 'What is your company country?',
                default: 'US',
                required: true
            );

            $addCompanyHours = confirm(
                label: 'Would you like to add your company hours?',
                default: true
            );

            if ($addCompanyHours) {

                $mondayOpen = confirm(
                    label: 'Is your company open on Monday?',
                    default: true
                );

                if ($mondayOpen) {
                    $company['hours']['monday']['open'] = text(
                        label: 'What time does your company open on Monday?',
                        placeholder: '08:00:00',
                        default: '08:00:00',
                        required: true
                    );
                    $company['hours']['monday']['close'] = text(
                        label: 'What time does your company close on Monday?',
                        placeholder: '18:00:00',
                        default: '18:00:00',
                        required: true
                    );
                }

                $tuesdayOpen = confirm(
                    label: 'Is your company open on Tuesday?',
                    default: true
                );

                if ($tuesdayOpen) {
                    $company['hours']['tuesday']['open'] = text(
                        label: 'What time does your company open on Tuesday?',
                        placeholder: '08:00:00',
                        default: '08:00:00',
                        required: true
                    );
                    $company['hours']['tuesday']['close'] = text(
                        label: 'What time does your company close on Tuesday?',
                        placeholder: '18:00:00',
                        default: '18:00:00',
                        required: true
                    );
                }

                $wednesdayOpen = confirm(
                    label: 'Is your company open on Wednesday?',
                    default: true
                );

                if ($wednesdayOpen) {
                    $company['hours']['wednesday']['open'] = text(
                        label: 'What time does your company open on Wednesday?',
                        placeholder: '08:00:00',
                        default: '08:00:00',
                        required: true
                    );
                    $company['hours']['wednesday']['close'] = text(
                        label: 'What time does your company close on Wednesday?',
                        placeholder: '18:00:00',
                        default: '18:00:00',
                        required: true
                    );
                }

                $thursdayOpen = confirm(
                    label: 'Is your company open on Thursday?',
                    default: true
                );

                if ($thursdayOpen) {
                    $company['hours']['thursday']['open'] = text(
                        label: 'What time does your company open on Thursday?',
                        placeholder: '08:00:00',
                        default: '08:00:00',
                        required: true
                    );
                    $company['hours']['thursday']['close'] = text(
                        label: 'What time does your company close on Thursday?',
                        placeholder: '18:00:00',
                        default: '18:00:00',
                        required: true
                    );
                }

                $fridayOpen = confirm(
                    label: 'Is your company open on Friday?',
                    default: true
                );

                if ($fridayOpen) {
                    $company['hours']['friday']['open'] = text(
                        label: 'What time does your company open on Friday?',
                        placeholder: '08:00:00',
                        default: '08:00:00',
                        required: true
                    );
                    $company['hours']['friday']['close'] = text(
                        label: 'What time does your company close on Friday?',
                        placeholder: '18:00:00',
                        default: '18:00:00',
                        required: true
                    );
                }

                $saturdayOpen = confirm(
                    label: 'Is your company open on Saturday?',
                    default: true
                );

                if ($saturdayOpen) {
                    $company['hours']['saturday']['open'] = text(
                        label: 'What time does your company open on Saturday?',
                        placeholder: '08:00:00',
                        default: '08:00:00',
                        required: true
                    );
                    $company['hours']['saturday']['close'] = text(
                        label: 'What time does your company close on Saturday?',
                        placeholder: '18:00:00',
                        default: '18:00:00',
                        required: true
                    );
                }

                $sundayOpen = confirm(
                    label: 'Is your company open on Sunday?',
                    default: true
                );

                if ($sundayOpen) {
                    $company['hours']['sunday']['open'] = text(
                        label: 'What time does your company open on Sunday?',
                        placeholder: '08:00:00',
                        default: '08:00:00',
                        required: true
                    );
                    $company['hours']['sunday']['close'] = text(
                        label: 'What time does your company close on Sunday?',
                        placeholder: '18:00:00',
                        default: '18:00:00',
                        required: true
                    );
                }

                $siteConfig['company'] = $company;
            } else {
                $siteConfig['company'] = null;

            }

            $parentCompanySetup = confirm(
                label: 'Would you like to setup your parent company information?',
                default: false,
                hint: 'This is used for parent organization schema markup.',
            );

            if ($parentCompanySetup) {
                $parentCompany = [
                    'same_as' => [],
                ];

                $parentCompany['name'] = text(
                    label: 'What is your parent company name?',
                    required: true
                );

                $parentCompany['url'] = text(
                    label: 'What is your parent company URL?',
                    required: true
                );

                $parentCompany['logo'] = text(
                    label: 'What is your parent company logo URL?',
                    required: true
                );

                $parentCompany['description'] = text(
                    label: 'What is your parent company description?',
                    required: true
                );

                $parentCompany['email'] = text(
                    label: 'What is your parent company email address?',
                    required: true,
                    validate: fn (string $value) => $this->validate($value, 'email', 'email'),
                );

                $parentCompany['phone'] = text(
                    label: 'What is your parent company phone number?',
                    required: true,
                    validate: fn (string $value) => $this->validate($value, 'phone', 'phone:US'),
                );

                $parentCompany['fax'] = text(
                    label: 'What is your parent company fax number?',
                    required: true,
                    validate: fn (string $value) => $this->validate($value, 'fax', 'phone:US'),
                );

                $parentCompany['address']['street'] = text(
                    label: 'What is your parent company street address?',
                    required: true
                );

                $parentCompany['address']['city'] = text(
                    label: 'What is your parent company city?',
                    required: true
                );

                $parentCompany['address']['state'] = text(
                    label: 'What is your parent company state?',
                    required: true
                );

                $parentCompany['address']['zipcode'] = text(
                    label: 'What is your parent company zipcode?',
                    required: true
                );

                $parentCompany['address']['country'] = text(
                    label: 'What is your parent company country?',
                    default: 'US',
                    required: true
                );

                $siteConfig['parent_company'] = $parentCompany;

            } else {
                $siteConfig['parent_company'] = null;
            }

            $localBusinessSetup = confirm(
                label: 'Would you like to setup your local business information?',
                default: false
            );

        }

        info('Creating config file...');

        // Convert the array to a string of PHP code
        $arrayAsString = var_export($siteConfig, true);

        // Replace array() with []
        $arrayAsString = str_replace('array (', '[', $arrayAsString);
        $arrayAsString = str_replace(')', ']', $arrayAsString);

        file_put_contents(config_path('website.php'), "<?php\n\nreturn " . $arrayAsString . ";\n");

        info('Config file created!');

        note('A config file has been created at config/website-test.php. You can edit this file at any time to change your website settings.');

        info('Updating SEO defaults based on your settings...');

        // AddSeoDefaults.php Middleware Blocks
        if ($parentCompanySetup) {

            $parentOrganizationCodeBlock = $this->parentOrganizationCodeBlock();

            $this->insertAfterLine(
                app_path('Http/Middleware/AddSeoDefaults.php'),
                '// PARENT_ORGANIZATION_CODE_BLOCK',
                $parentOrganizationCodeBlock
            );
        }

        if ($companySetup) {

            $organizationCodeBlock = $this->organizationCodeBlock();

            if (! $parentCompanySetup) {
                $organizationCodeBlock = str_replace(
                    "->sameAs(config('website.company.same_as'));",
                    '->sameAs(config(\'website.company.same_as\'))' . "\n" . '->parentOrganization($parentOrganization);',
                    $organizationCodeBlock);
            }

            $this->insertAfterLine(
                app_path('Http/Middleware/AddSeoDefaults.php'),
                '// ORGANIZATION_CODE_BLOCK',
                $organizationCodeBlock
            );

        }

        if ($localBusinessSetup) {
            $this->insertAfterLine(
                app_path('Http/Middleware/AddSeoDefaults.php'),
                '// LOCAL_BUSINESS_CODE_BLOCK',
                $this->localBusinessCodeBlock()
            );
        }

        info('SEO defaults updated! Please review the changes made to app/Http/Middleware/AddSeoDefaults.php.');

        $removeInitCommand = confirm(
            label: 'Would you like to remove the init command?',
            default: false
        );

        if ($removeInitCommand) {
            unlink(__FILE__);
        }

    }

    public function parentOrganizationCodeBlock(): string
    {
        return <<<'CODE'
$parentOrganization = Schema::organization()
            ->name(config('website.parent_company.name'))
            ->url(config('website.parent_company.url'))
            ->logo(config('website.parent_company.logo'))
            ->setProperty('alternateName', config('website.parent_company.alternate_name'))
            ->setProperty('sameAs', [])
            ->contactPoint(
                Schema::contactPoint()
                    ->telephone(config('website.parent_company.phone'))
                    ->email(config('website.parent_company.email'))
                    ->contactType('inquiries')
            )
            ->address(
                Schema::postalAddress()
                    ->streetAddress(config('website.parent_company.address.street'))
                    ->addressLocality(config('website.parent_company.address.city'))
                    ->addressRegion(config('website.parent_company.address.state'))
                    ->postalCode(config('website.parent_company.address.zipcode'))
                    ->addressCountry('US')
            )
            ->faxNumber(config('website.parent_company.fax'))
            ->sameAs(config('website.parent_company.same_as'));
CODE;
    }

    public function organizationCodeBlock(): string
    {
        return <<<'CODE'
$organization = Schema::organization()
            ->name(config('website.company.name'))
            ->url(config('website.company.url'))
            ->logo(config('website.company.logo'))
            ->setProperty('alternateName', config('website.company.alternate_name'))
            ->setProperty('sameAs', [])
            ->contactPoint(
                Schema::contactPoint()
                    ->telephone(config('website.company.phone'))
                    ->email(config('website.company.email'))
                    ->contactType('customer service')
                    ->areaServed('US')
                    ->hoursAvailable([
                        Schema::openingHoursSpecification()
                            ->dayOfWeek(DayOfWeek::Monday)
                            ->opens(config('website.company.hours.monday.open'))
                            ->closes(config('website.company.hours.monday.close')),
                        Schema::openingHoursSpecification()
                            ->dayOfWeek(DayOfWeek::Tuesday)
                            ->opens(config('website.company.hours.tuesday.open'))
                            ->closes(config('website.company.hours.tuesday.close')),
                        Schema::openingHoursSpecification()
                            ->dayOfWeek(DayOfWeek::Wednesday)
                            ->opens(config('website.company.hours.wednesday.open'))
                            ->closes(config('website.company.hours.wednesday.close')),
                        Schema::openingHoursSpecification()
                            ->dayOfWeek(DayOfWeek::Thursday)
                            ->opens(config('website.company.hours.thursday.open'))
                            ->closes(config('website.company.hours.thursday.close')),
                        Schema::openingHoursSpecification()
                            ->dayOfWeek(DayOfWeek::Friday)
                            ->opens(config('website.company.hours.friday.open'))
                            ->closes(config('website.company.hours.friday.close')),
                        Schema::openingHoursSpecification()
                            ->dayOfWeek(DayOfWeek::Saturday)
                            ->opens(config('website.company.hours.saturday.open'))
                            ->closes(config('website.company.hours.saturday.close')),
                        Schema::openingHoursSpecification()
                            ->dayOfWeek(DayOfWeek::Sunday)
                            ->opens(config('website.company.hours.sunday.open'))
                            ->closes(config('website.company.hours.sunday.close')),
                    ])
            )
            ->address(
                Schema::postalAddress()
                    ->streetAddress(config('website.company.address.street'))
                    ->addressLocality(config('website.company.address.city'))
                    ->addressRegion(config('website.company.address.state'))
                    ->postalCode(config('website.company.address.zipcode'))
                    ->addressCountry('US')
            )
            ->faxNumber(config('website.company.fax'))
            ->sameAs(config('website.company.same_as'));

            seo()->addSchema($organization);
CODE;
    }

    public function localBusinessCodeBlock(): string
    {
        return <<<'CODE'
seo()->addSchema(
            Schema::store()
                ->name(config('website.name'))
                ->url(config('website.url'))
                ->image(url(asset('images/seo/site-logo.jpg')))
                ->telephone(config('website.company.phone'))
                ->address(
                    Schema::postalAddress()
                        ->streetAddress(config('website.company.address.street'))
                        ->addressLocality(config('website.company.address.city'))
                        ->addressRegion(config('website.company.address.state'))
                        ->postalCode(config('website.company.address.zipcode'))
                        ->addressCountry(config('website.company.address.country'))
                )
        );
CODE;
    }

    private function validate($value, $name, $rules, $messages = [], $attributes = [])
    {
        return Validator::make([$name => $value], [$name => $rules], $messages, $attributes)
            ->errors()
            ->first($name);
    }

    private function insertAfterLine($file, $search, $insert): bool
    {
        // Read the existing content
        $fileContent = file_get_contents($file);
        if ($fileContent === false) {
            // Handle error: file read failed
            return false;
        }

        // Insert the code block a line below the placeholder
        $modifiedContent = str_replace(
            $search,
            $search . "\n" . $insert,
            $fileContent
        );

        // Write the modified content back to the file
        if (file_put_contents($file, $modifiedContent) === false) {
            // Handle error: file write failed
            return false;
        }

        return true;

    }
}
