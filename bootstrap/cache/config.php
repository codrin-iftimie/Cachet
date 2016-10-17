<?php return array (
  'app' => 
  array (
    'env' => 'dev',
    'debug' => true,
    'url' => 'http://cachet.dev',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'oWqUmpwraJ1XGiVod5STJmwyA0DKlEY2',
    'cipher' => 'AES-256-CBC',
    'log' => 'daily',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'AltThree\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      13 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      14 => 'Illuminate\\Queue\\QueueServiceProvider',
      15 => 'Illuminate\\Redis\\RedisServiceProvider',
      16 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      17 => 'Illuminate\\Session\\SessionServiceProvider',
      18 => 'Illuminate\\Translation\\TranslationServiceProvider',
      19 => 'Illuminate\\Validation\\ValidationServiceProvider',
      20 => 'Illuminate\\View\\ViewServiceProvider',
      21 => 'AltThree\\Badger\\BadgerServiceProvider',
      22 => 'AltThree\\Emoji\\EmojiServiceProvider',
      23 => 'BackupManager\\Laravel\\Laravel5ServiceProvider',
      24 => 'Barryvdh\\Cors\\ServiceProvider',
      25 => 'Fedeisas\\LaravelMailCssInliner\\LaravelMailCssInlinerServiceProvider',
      26 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
      27 => 'GrahamCampbell\\Binput\\BinputServiceProvider',
      28 => 'GrahamCampbell\\Exceptions\\ExceptionsServiceProvider',
      29 => 'GrahamCampbell\\Core\\CoreServiceProvider',
      30 => 'GrahamCampbell\\Markdown\\MarkdownServiceProvider',
      31 => 'GrahamCampbell\\Security\\SecurityServiceProvider',
      32 => 'Jenssegers\\Date\\DateServiceProvider',
      33 => 'McCool\\LaravelAutoPresenter\\AutoPresenterServiceProvider',
      34 => 'PragmaRX\\Google2FA\\Vendor\\Laravel\\ServiceProvider',
      35 => 'Roumen\\Feed\\FeedServiceProvider',
      36 => 'CachetHQ\\Cachet\\Foundation\\Providers\\AppServiceProvider',
      37 => 'CachetHQ\\Cachet\\Foundation\\Providers\\ComposerServiceProvider',
      38 => 'CachetHQ\\Cachet\\Foundation\\Providers\\ConsoleServiceProvider',
      39 => 'CachetHQ\\Cachet\\Foundation\\Providers\\ConfigServiceProvider',
      40 => 'CachetHQ\\Cachet\\Foundation\\Providers\\EventServiceProvider',
      41 => 'CachetHQ\\Cachet\\Foundation\\Providers\\IntegrationServiceProvider',
      42 => 'CachetHQ\\Cachet\\Foundation\\Providers\\ModuleServiceProvider',
      43 => 'CachetHQ\\Cachet\\Foundation\\Providers\\RepositoryServiceProvider',
      44 => 'CachetHQ\\Cachet\\Foundation\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Binput' => 'GrahamCampbell\\Binput\\Facades\\Binput',
      'Str' => 'Illuminate\\Support\\Str',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'CachetHQ\\Cachet\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'email' => 'auth.emails.password',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'backup-manager' => 
  array (
    'local' => 
    array (
      'type' => 'Local',
      'root' => '/vagrant/Cachet/database/backups',
    ),
    's3' => 
    array (
      'type' => 'AwsS3',
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
      'bucket' => '',
      'root' => '',
    ),
    'gcs' => 
    array (
      'type' => 'Gcs',
      'key' => '',
      'secret' => '',
      'bucket' => '',
      'root' => '',
    ),
    'rackspace' => 
    array (
      'type' => 'Rackspace',
      'username' => '',
      'key' => '',
      'container' => '',
      'zone' => '',
      'endpoint' => 'https://identity.api.rackspacecloud.com/v2.0/',
      'root' => '',
    ),
    'dropbox' => 
    array (
      'type' => 'Dropbox',
      'token' => '',
      'key' => '',
      'secret' => '',
      'app' => '',
      'root' => '',
    ),
    'ftp' => 
    array (
      'type' => 'Ftp',
      'host' => '',
      'username' => '',
      'password' => '',
      'port' => 21,
      'passive' => true,
      'ssl' => true,
      'timeout' => 30,
      'root' => '',
    ),
    'sftp' => 
    array (
      'type' => 'Sftp',
      'host' => '',
      'username' => '',
      'password' => '',
      'port' => 21,
      'timeout' => 10,
      'privateKey' => '',
      'root' => '',
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'apc',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/vagrant/Cachet/storage/framework/cache',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel',
  ),
  'cachet' => 
  array (
    'timezone' => 'Europe/Bucharest',
    'is_docker' => false,
    'beacon' => true,
  ),
  'compile' => 
  array (
    'files' => 
    array (
    ),
    'providers' => 
    array (
    ),
  ),
  'cors' => 
  array (
    'supportsCredentials' => false,
    'allowedOrigins' => 
    array (
      0 => '*',
    ),
    'allowedHeaders' => 
    array (
      0 => 'X-Cachet-Token',
    ),
    'allowedMethods' => 
    array (
      0 => '*',
    ),
    'exposedHeaders' => 
    array (
    ),
    'maxAge' => 3600,
    'hosts' => 
    array (
    ),
    'paths' => 
    array (
      'api/v1/*' => 
      array (
        'allowedOrigins' => 
        array (
          0 => 'http://cachet.dev',
        ),
      ),
    ),
  ),
  'css-inliner' => 
  array (
    'strip-styles' => true,
    'strip-classes' => true,
  ),
  'database' => 
  array (
    'fetch' => 8,
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'cachet',
        'prefix' => NULL,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'cachet',
        'username' => 'homestead',
        'password' => 'secret',
        'port' => '3306',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => NULL,
        'strict' => false,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'database' => 'cachet',
        'username' => 'homestead',
        'password' => 'secret',
        'port' => '5432',
        'charset' => 'utf8',
        'prefix' => NULL,
        'schema' => 'public',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'cluster' => false,
      'default' => 
      array (
        'host' => NULL,
        'port' => NULL,
        'database' => NULL,
        'password' => NULL,
      ),
    ),
  ),
  'emoji' => 
  array (
    'token' => NULL,
  ),
  'exceptions' => 
  array (
    'transformers' => 
    array (
      0 => 'GrahamCampbell\\Exceptions\\Transformers\\AuthTransformer',
      1 => 'GrahamCampbell\\Exceptions\\Transformers\\CsrfTransformer',
      2 => 'GrahamCampbell\\Exceptions\\Transformers\\ModelTransformer',
      3 => 'CachetHQ\\Cachet\\Foundation\\Exceptions\\Transformers\\BusTransformer',
    ),
    'displayers' => 
    array (
      0 => 'CachetHQ\\Cachet\\Foundation\\Exceptions\\Displayers\\JsonValidationDisplayer',
      1 => 'CachetHQ\\Cachet\\Foundation\\Exceptions\\Displayers\\RedirectDisplayer',
      2 => 'CachetHQ\\Cachet\\Foundation\\Exceptions\\Displayers\\ThrottleDisplayer',
      3 => 'GrahamCampbell\\Exceptions\\Displayers\\DebugDisplayer',
      4 => 'GrahamCampbell\\Exceptions\\Displayers\\HtmlDisplayer',
      5 => 'GrahamCampbell\\Exceptions\\Displayers\\JsonDisplayer',
      6 => 'GrahamCampbell\\Exceptions\\Displayers\\JsonApiDisplayer',
    ),
    'filters' => 
    array (
      0 => 'GrahamCampbell\\Exceptions\\Filters\\VerboseFilter',
      1 => 'GrahamCampbell\\Exceptions\\Filters\\CanDisplayFilter',
      2 => 'GrahamCampbell\\Exceptions\\Filters\\ContentTypeFilter',
      3 => 'CachetHQ\\Cachet\\Foundation\\Exceptions\\Filters\\ApiFilter',
    ),
    'default' => 'GrahamCampbell\\Exceptions\\Displayers\\HtmlDisplayer',
    'levels' => 
    array (
      'Illuminate\\Auth\\Access\\AuthorizationException' => 'warning',
      'Illuminate\\Database\\Eloquent\\ModelNotFoundException' => 'warning',
      'Illuminate\\Session\\TokenMismatchException' => 'notice',
      'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface' => 'warning',
      'Symfony\\Component\\Debug\\Exception\\FatalErrorException' => 'critical',
      'Exception' => 'error',
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/vagrant/Cachet/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/vagrant/Cachet/storage/app/public',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => 'your-key',
        'secret' => 'your-secret',
        'region' => 'your-region',
        'bucket' => 'your-bucket',
      ),
    ),
  ),
  'langs' => 
  array (
    'af' => 
    array (
      'name' => 'Afrikaans',
      'subset' => 'latin',
    ),
    'ar' => 
    array (
      'name' => 'Arabic',
      'subset' => 'latin',
    ),
    'ca' => 
    array (
      'name' => 'Catalan',
      'subset' => 'latin',
    ),
    'cs' => 
    array (
      'name' => 'Czech',
      'subset' => 'latin,latin-ext',
    ),
    'da' => 
    array (
      'name' => 'Danish',
      'subset' => 'latin,latin-ext',
    ),
    'de' => 
    array (
      'name' => 'Deutsch',
      'subset' => 'latin,latin-ext',
    ),
    'el' => 
    array (
      'name' => 'Greek',
      'subset' => 'greek,greek-ext',
    ),
    'en' => 
    array (
      'name' => 'English',
      'subset' => 'latin',
    ),
    'en-UD' => 
    array (
      'name' => 'CrowdIn - InContext Localization',
      'subset' => 'latin',
    ),
    'es' => 
    array (
      'name' => 'Español',
      'subset' => 'latin,latin-ext',
    ),
    'fa' => 
    array (
      'name' => 'Persian',
      'subset' => 'latin',
    ),
    'fi' => 
    array (
      'name' => 'Finnish',
      'subset' => 'latin,latin-ext',
    ),
    'fr' => 
    array (
      'name' => 'Français',
      'subset' => 'latin,latin-ext',
    ),
    'he' => 
    array (
      'name' => 'Hebrew',
      'subset' => 'latin',
    ),
    'hu' => 
    array (
      'name' => 'Hungarian',
      'subset' => 'latin,latin-ext',
    ),
    'id' => 
    array (
      'name' => 'Indonesian',
      'subset' => 'latin',
    ),
    'it' => 
    array (
      'name' => 'Italiano',
      'subset' => 'latin,latin-ext',
    ),
    'ja' => 
    array (
      'name' => 'Japanese',
      'subset' => 'latin',
    ),
    'ko' => 
    array (
      'name' => '한글',
      'subset' => 'latin',
    ),
    'nl' => 
    array (
      'name' => 'Nederlands',
      'subset' => 'latin,latin-ext',
    ),
    'no' => 
    array (
      'name' => 'Norwegian',
      'subset' => 'latin,latin-ext',
    ),
    'pl' => 
    array (
      'name' => 'Polski',
      'subset' => 'latin,latin-ext',
    ),
    'pt-BR' => 
    array (
      'name' => 'Portuguese, Brazilian',
      'subset' => 'latin,latin-ext',
    ),
    'pt-PT' => 
    array (
      'name' => 'Portuguese, Portugal',
      'subset' => 'latin,latin-ext',
    ),
    'ro' => 
    array (
      'name' => 'Romanian',
      'subset' => 'latin,latin-ext',
    ),
    'ru' => 
    array (
      'name' => 'Русский',
      'subset' => 'latin,cyrillic',
    ),
    'sq' => 
    array (
      'name' => 'Albanian',
      'subset' => 'latin,latin-ext',
    ),
    'sr' => 
    array (
      'name' => 'Sebrian (Cyrillic)',
      'subset' => 'latin,cyrillic,cyrillic-ext',
    ),
    'sv-SE' => 
    array (
      'name' => 'Swedish',
      'subset' => 'latin,latin-ext',
    ),
    'tr' => 
    array (
      'name' => 'Turkish',
      'subset' => 'latin,latin-ext',
    ),
    'uk' => 
    array (
      'name' => 'Ukranian',
      'subset' => 'latin,cyrillic-ext',
    ),
    'vi' => 
    array (
      'name' => 'Vietnamese',
      'subset' => 'latin,vietnamese',
    ),
    'zh-CN' => 
    array (
      'name' => '简体中文',
      'subset' => 'latin',
    ),
    'zh-TW' => 
    array (
      'name' => '繁體中文',
      'subset' => 'latin',
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'email-smtp.eu-west-1.amazonaws.com',
    'port' => '587',
    'from' => 
    array (
      'address' => 'info@figshare.com',
      'name' => 'figshare status update',
    ),
    'encryption' => 'tls',
    'username' => 'AKIAIHFN6VJW4FRFEV3A',
    'password' => 'AlaemahahusSWq2yk8ys6GGqGswh9PXhLn5n2m9R3898',
    'sendmail' => '/usr/sbin/sendmail -bs',
  ),
  'markdown' => 
  array (
    'views' => false,
    'extensions' => 
    array (
    ),
    'renderer' => 
    array (
      'block_separator' => '
',
      'inner_separator' => '
',
      'soft_break' => '

',
    ),
    'enable_em' => true,
    'enable_strong' => true,
    'use_asterisk' => true,
    'use_underscore' => true,
    'safe' => true,
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'expire' => 60,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'ttr' => 60,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'expire' => 86400,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'security' => 
  array (
    'evil' => 
    array (
      0 => '(?<!\\w)on\\w*',
      1 => 'style',
      2 => 'xmlns',
      3 => 'formaction',
      4 => 'form',
      5 => 'xlink:href',
      6 => 'FSCommand',
      7 => 'seekSegmentTime',
    ),
  ),
  'services' => 
  array (
    'github' => 
    array (
      'token' => NULL,
    ),
    'mailgun' => 
    array (
      'domain' => 'AKIAIHFN6VJW4FRFEV3A',
      'secret' => 'AlaemahahusSWq2yk8ys6GGqGswh9PXhLn5n2m9R3898',
    ),
    'mandrill' => 
    array (
      'secret' => 'AlaemahahusSWq2yk8ys6GGqGswh9PXhLn5n2m9R3898',
    ),
    'ses' => 
    array (
      'key' => 'AKIAIHFN6VJW4FRFEV3A',
      'secret' => 'AlaemahahusSWq2yk8ys6GGqGswh9PXhLn5n2m9R3898',
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => 'AlaemahahusSWq2yk8ys6GGqGswh9PXhLn5n2m9R3898',
    ),
  ),
  'session' => 
  array (
    'driver' => 'apc',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/vagrant/Cachet/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
  ),
  'setting' => 
  array (
    'dashboard_login_link' => true,
    'enable_subscribers' => true,
    'automatic_localization' => false,
    'show_support' => true,
    'enable_external_dependencies' => true,
    'show_timezone' => false,
    'skip_subscriber_verification' => false,
    'only_disrupted_days' => false,
    'app_name' => 'Codrin\'s Cachet',
    'app_domain' => 'http://cachet.dev',
    'app_timezone' => 'Europe/Bucharest',
    'app_locale' => 'en',
    'app_incident_days' => '7',
    '_token' => 'wgzhO6y27BY1gBE5pDPioMpQiSIEgItIASIB0G3B',
    'app_about' => '',
    'app_analytics' => '',
    'app_analytics_gs' => '',
    'app_analytics_pi_url' => '',
    'app_analytics_pi_siteid' => true,
    'date_format' => 'l jS F Y',
    'incident_date_format' => 'l jS F Y H:i:s',
    'display_graphs' => true,
  ),
  'trustedproxy' => 
  array (
    'proxies' => 
    array (
      0 => '103.21.244.0/22',
      1 => '103.22.200.0/22',
      2 => '103.31.4.0/22',
      3 => '104.16.0.0/12',
      4 => '108.162.192.0/18',
      5 => '131.0.72.0/22',
      6 => '141.101.64.0/18',
      7 => '162.158.0.0/15',
      8 => '172.64.0.0/13',
      9 => '173.245.48.0/20',
      10 => '188.114.96.0/20',
      11 => '190.93.240.0/20',
      12 => '197.234.240.0/22',
      13 => '198.41.128.0/17',
      14 => '199.27.128.0/21',
      15 => '2400:cb00::/32',
      16 => '2405:8100::/32',
      17 => '2405:b500::/32',
      18 => '2606:4700::/32',
      19 => '2803:f800::/32',
    ),
    'headers' => 
    array (
      'client_ip' => 'X_FORWARDED_FOR',
      'client_host' => 'X_FORWARDED_HOST',
      'client_proto' => 'X_FORWARDED_PROTO',
      'client_port' => 'X_FORWARDED_PORT',
    ),
  ),
  'twigbridge' => 
  array (
    'twig' => 
    array (
      'extension' => 'twig',
      'environment' => 
      array (
        'debug' => false,
        'charset' => 'utf-8',
        'base_template_class' => 'TwigBridge\\Twig\\Template',
        'cache' => NULL,
        'auto_reload' => true,
        'strict_variables' => false,
        'autoescape' => 'html',
        'optimizations' => -1,
      ),
      'globals' => 
      array (
      ),
    ),
    'extensions' => 
    array (
      'enabled' => 
      array (
        0 => 'TwigBridge\\Extension\\Loader\\Facades',
        1 => 'TwigBridge\\Extension\\Loader\\Filters',
        2 => 'TwigBridge\\Extension\\Loader\\Functions',
        3 => 'TwigBridge\\Extension\\Laravel\\Auth',
        4 => 'TwigBridge\\Extension\\Laravel\\Config',
        5 => 'TwigBridge\\Extension\\Laravel\\Dump',
        6 => 'TwigBridge\\Extension\\Laravel\\Input',
        7 => 'TwigBridge\\Extension\\Laravel\\Session',
        8 => 'TwigBridge\\Extension\\Laravel\\Str',
        9 => 'TwigBridge\\Extension\\Laravel\\Translator',
        10 => 'TwigBridge\\Extension\\Laravel\\Url',
      ),
      'facades' => 
      array (
      ),
      'functions' => 
      array (
        0 => 'elixir',
        1 => 'head',
        2 => 'last',
      ),
      'filters' => 
      array (
        'get' => 'data_get',
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/vagrant/Cachet/resources/views',
    ),
    'compiled' => '/vagrant/Cachet/storage/framework/views',
  ),
);
