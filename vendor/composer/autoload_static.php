<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f5ad2f1c7a8dbb8174c9008f7590822
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '23c18046f52bef3eea034657bafda50f' => __DIR__ . '/..' . '/symfony/polyfill-php81/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php81\\' => 23,
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\Dotenv\\' => 25,
            'Symfony\\Component\\Config\\' => 25,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php81\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php81',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Classes\\PDOSignleton' => __DIR__ . '/../..' . '/src/classes/PDOSignleton.php',
        'App\\Controllers\\ArticlesController' => __DIR__ . '/../..' . '/src/controllers/ArticlesController.php',
        'App\\Controllers\\ConnexionController' => __DIR__ . '/../..' . '/src/controllers/ConnexionController.php',
        'App\\Controllers\\ContactController' => __DIR__ . '/../..' . '/src/controllers/ContactController.php',
        'App\\Controllers\\ErrorController' => __DIR__ . '/../..' . '/src/controllers/ErrorController.php',
        'App\\Controllers\\LogSystemController' => __DIR__ . '/../..' . '/src/controllers/LogSystemController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/src/controllers/UsersController.php',
        'App\\Helper\\Helpers' => __DIR__ . '/../..' . '/src/helpers/Helpers.php',
        'App\\Model\\ArticlesModel' => __DIR__ . '/../..' . '/src/models/ArticlesModel.php',
        'App\\Model\\LogSystemModel' => __DIR__ . '/../..' . '/src/models/LogSystemModel.php',
        'App\\Model\\UsersModel' => __DIR__ . '/../..' . '/src/models/UsersModel.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ReturnTypeWillChange' => __DIR__ . '/..' . '/symfony/polyfill-php81/Resources/stubs/ReturnTypeWillChange.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\Config\\Builder\\ClassBuilder' => __DIR__ . '/..' . '/symfony/config/Builder/ClassBuilder.php',
        'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator' => __DIR__ . '/..' . '/symfony/config/Builder/ConfigBuilderGenerator.php',
        'Symfony\\Component\\Config\\Builder\\ConfigBuilderGeneratorInterface' => __DIR__ . '/..' . '/symfony/config/Builder/ConfigBuilderGeneratorInterface.php',
        'Symfony\\Component\\Config\\Builder\\ConfigBuilderInterface' => __DIR__ . '/..' . '/symfony/config/Builder/ConfigBuilderInterface.php',
        'Symfony\\Component\\Config\\Builder\\Method' => __DIR__ . '/..' . '/symfony/config/Builder/Method.php',
        'Symfony\\Component\\Config\\Builder\\Property' => __DIR__ . '/..' . '/symfony/config/Builder/Property.php',
        'Symfony\\Component\\Config\\ConfigCache' => __DIR__ . '/..' . '/symfony/config/ConfigCache.php',
        'Symfony\\Component\\Config\\ConfigCacheFactory' => __DIR__ . '/..' . '/symfony/config/ConfigCacheFactory.php',
        'Symfony\\Component\\Config\\ConfigCacheFactoryInterface' => __DIR__ . '/..' . '/symfony/config/ConfigCacheFactoryInterface.php',
        'Symfony\\Component\\Config\\ConfigCacheInterface' => __DIR__ . '/..' . '/symfony/config/ConfigCacheInterface.php',
        'Symfony\\Component\\Config\\Definition\\ArrayNode' => __DIR__ . '/..' . '/symfony/config/Definition/ArrayNode.php',
        'Symfony\\Component\\Config\\Definition\\BaseNode' => __DIR__ . '/..' . '/symfony/config/Definition/BaseNode.php',
        'Symfony\\Component\\Config\\Definition\\BooleanNode' => __DIR__ . '/..' . '/symfony/config/Definition/BooleanNode.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/ArrayNodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\BooleanNodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/BooleanNodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\BuilderAwareInterface' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/BuilderAwareInterface.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\EnumNodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/EnumNodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\ExprBuilder' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/ExprBuilder.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\FloatNodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/FloatNodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\IntegerNodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/IntegerNodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\MergeBuilder' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/MergeBuilder.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/NodeBuilder.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/NodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\NodeParentInterface' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/NodeParentInterface.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\NormalizationBuilder' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/NormalizationBuilder.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\NumericNodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/NumericNodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\ParentNodeDefinitionInterface' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/ParentNodeDefinitionInterface.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\ScalarNodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/ScalarNodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/TreeBuilder.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\ValidationBuilder' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/ValidationBuilder.php',
        'Symfony\\Component\\Config\\Definition\\Builder\\VariableNodeDefinition' => __DIR__ . '/..' . '/symfony/config/Definition/Builder/VariableNodeDefinition.php',
        'Symfony\\Component\\Config\\Definition\\ConfigurationInterface' => __DIR__ . '/..' . '/symfony/config/Definition/ConfigurationInterface.php',
        'Symfony\\Component\\Config\\Definition\\Dumper\\XmlReferenceDumper' => __DIR__ . '/..' . '/symfony/config/Definition/Dumper/XmlReferenceDumper.php',
        'Symfony\\Component\\Config\\Definition\\Dumper\\YamlReferenceDumper' => __DIR__ . '/..' . '/symfony/config/Definition/Dumper/YamlReferenceDumper.php',
        'Symfony\\Component\\Config\\Definition\\EnumNode' => __DIR__ . '/..' . '/symfony/config/Definition/EnumNode.php',
        'Symfony\\Component\\Config\\Definition\\Exception\\DuplicateKeyException' => __DIR__ . '/..' . '/symfony/config/Definition/Exception/DuplicateKeyException.php',
        'Symfony\\Component\\Config\\Definition\\Exception\\Exception' => __DIR__ . '/..' . '/symfony/config/Definition/Exception/Exception.php',
        'Symfony\\Component\\Config\\Definition\\Exception\\ForbiddenOverwriteException' => __DIR__ . '/..' . '/symfony/config/Definition/Exception/ForbiddenOverwriteException.php',
        'Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException' => __DIR__ . '/..' . '/symfony/config/Definition/Exception/InvalidConfigurationException.php',
        'Symfony\\Component\\Config\\Definition\\Exception\\InvalidDefinitionException' => __DIR__ . '/..' . '/symfony/config/Definition/Exception/InvalidDefinitionException.php',
        'Symfony\\Component\\Config\\Definition\\Exception\\InvalidTypeException' => __DIR__ . '/..' . '/symfony/config/Definition/Exception/InvalidTypeException.php',
        'Symfony\\Component\\Config\\Definition\\Exception\\UnsetKeyException' => __DIR__ . '/..' . '/symfony/config/Definition/Exception/UnsetKeyException.php',
        'Symfony\\Component\\Config\\Definition\\FloatNode' => __DIR__ . '/..' . '/symfony/config/Definition/FloatNode.php',
        'Symfony\\Component\\Config\\Definition\\IntegerNode' => __DIR__ . '/..' . '/symfony/config/Definition/IntegerNode.php',
        'Symfony\\Component\\Config\\Definition\\NodeInterface' => __DIR__ . '/..' . '/symfony/config/Definition/NodeInterface.php',
        'Symfony\\Component\\Config\\Definition\\NumericNode' => __DIR__ . '/..' . '/symfony/config/Definition/NumericNode.php',
        'Symfony\\Component\\Config\\Definition\\Processor' => __DIR__ . '/..' . '/symfony/config/Definition/Processor.php',
        'Symfony\\Component\\Config\\Definition\\PrototypeNodeInterface' => __DIR__ . '/..' . '/symfony/config/Definition/PrototypeNodeInterface.php',
        'Symfony\\Component\\Config\\Definition\\PrototypedArrayNode' => __DIR__ . '/..' . '/symfony/config/Definition/PrototypedArrayNode.php',
        'Symfony\\Component\\Config\\Definition\\ScalarNode' => __DIR__ . '/..' . '/symfony/config/Definition/ScalarNode.php',
        'Symfony\\Component\\Config\\Definition\\VariableNode' => __DIR__ . '/..' . '/symfony/config/Definition/VariableNode.php',
        'Symfony\\Component\\Config\\Exception\\FileLoaderImportCircularReferenceException' => __DIR__ . '/..' . '/symfony/config/Exception/FileLoaderImportCircularReferenceException.php',
        'Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException' => __DIR__ . '/..' . '/symfony/config/Exception/FileLocatorFileNotFoundException.php',
        'Symfony\\Component\\Config\\Exception\\LoaderLoadException' => __DIR__ . '/..' . '/symfony/config/Exception/LoaderLoadException.php',
        'Symfony\\Component\\Config\\FileLocator' => __DIR__ . '/..' . '/symfony/config/FileLocator.php',
        'Symfony\\Component\\Config\\FileLocatorInterface' => __DIR__ . '/..' . '/symfony/config/FileLocatorInterface.php',
        'Symfony\\Component\\Config\\Loader\\DelegatingLoader' => __DIR__ . '/..' . '/symfony/config/Loader/DelegatingLoader.php',
        'Symfony\\Component\\Config\\Loader\\FileLoader' => __DIR__ . '/..' . '/symfony/config/Loader/FileLoader.php',
        'Symfony\\Component\\Config\\Loader\\GlobFileLoader' => __DIR__ . '/..' . '/symfony/config/Loader/GlobFileLoader.php',
        'Symfony\\Component\\Config\\Loader\\Loader' => __DIR__ . '/..' . '/symfony/config/Loader/Loader.php',
        'Symfony\\Component\\Config\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/symfony/config/Loader/LoaderInterface.php',
        'Symfony\\Component\\Config\\Loader\\LoaderResolver' => __DIR__ . '/..' . '/symfony/config/Loader/LoaderResolver.php',
        'Symfony\\Component\\Config\\Loader\\LoaderResolverInterface' => __DIR__ . '/..' . '/symfony/config/Loader/LoaderResolverInterface.php',
        'Symfony\\Component\\Config\\Loader\\ParamConfigurator' => __DIR__ . '/..' . '/symfony/config/Loader/ParamConfigurator.php',
        'Symfony\\Component\\Config\\ResourceCheckerConfigCache' => __DIR__ . '/..' . '/symfony/config/ResourceCheckerConfigCache.php',
        'Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory' => __DIR__ . '/..' . '/symfony/config/ResourceCheckerConfigCacheFactory.php',
        'Symfony\\Component\\Config\\ResourceCheckerInterface' => __DIR__ . '/..' . '/symfony/config/ResourceCheckerInterface.php',
        'Symfony\\Component\\Config\\Resource\\ClassExistenceResource' => __DIR__ . '/..' . '/symfony/config/Resource/ClassExistenceResource.php',
        'Symfony\\Component\\Config\\Resource\\ComposerResource' => __DIR__ . '/..' . '/symfony/config/Resource/ComposerResource.php',
        'Symfony\\Component\\Config\\Resource\\DirectoryResource' => __DIR__ . '/..' . '/symfony/config/Resource/DirectoryResource.php',
        'Symfony\\Component\\Config\\Resource\\FileExistenceResource' => __DIR__ . '/..' . '/symfony/config/Resource/FileExistenceResource.php',
        'Symfony\\Component\\Config\\Resource\\FileResource' => __DIR__ . '/..' . '/symfony/config/Resource/FileResource.php',
        'Symfony\\Component\\Config\\Resource\\GlobResource' => __DIR__ . '/..' . '/symfony/config/Resource/GlobResource.php',
        'Symfony\\Component\\Config\\Resource\\ReflectionClassResource' => __DIR__ . '/..' . '/symfony/config/Resource/ReflectionClassResource.php',
        'Symfony\\Component\\Config\\Resource\\ResourceInterface' => __DIR__ . '/..' . '/symfony/config/Resource/ResourceInterface.php',
        'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker' => __DIR__ . '/..' . '/symfony/config/Resource/SelfCheckingResourceChecker.php',
        'Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface' => __DIR__ . '/..' . '/symfony/config/Resource/SelfCheckingResourceInterface.php',
        'Symfony\\Component\\Config\\Util\\Exception\\InvalidXmlException' => __DIR__ . '/..' . '/symfony/config/Util/Exception/InvalidXmlException.php',
        'Symfony\\Component\\Config\\Util\\Exception\\XmlParsingException' => __DIR__ . '/..' . '/symfony/config/Util/Exception/XmlParsingException.php',
        'Symfony\\Component\\Config\\Util\\XmlUtils' => __DIR__ . '/..' . '/symfony/config/Util/XmlUtils.php',
        'Symfony\\Component\\Dotenv\\Dotenv' => __DIR__ . '/..' . '/symfony/dotenv/Dotenv.php',
        'Symfony\\Component\\Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/dotenv/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Dotenv\\Exception\\FormatException' => __DIR__ . '/..' . '/symfony/dotenv/Exception/FormatException.php',
        'Symfony\\Component\\Dotenv\\Exception\\FormatExceptionContext' => __DIR__ . '/..' . '/symfony/dotenv/Exception/FormatExceptionContext.php',
        'Symfony\\Component\\Dotenv\\Exception\\PathException' => __DIR__ . '/..' . '/symfony/dotenv/Exception/PathException.php',
        'Symfony\\Component\\Filesystem\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/filesystem/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Filesystem\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/symfony/filesystem/Exception/FileNotFoundException.php',
        'Symfony\\Component\\Filesystem\\Exception\\IOException' => __DIR__ . '/..' . '/symfony/filesystem/Exception/IOException.php',
        'Symfony\\Component\\Filesystem\\Exception\\IOExceptionInterface' => __DIR__ . '/..' . '/symfony/filesystem/Exception/IOExceptionInterface.php',
        'Symfony\\Component\\Filesystem\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/filesystem/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Filesystem\\Filesystem' => __DIR__ . '/..' . '/symfony/filesystem/Filesystem.php',
        'Symfony\\Component\\Routing\\Annotation\\Route' => __DIR__ . '/..' . '/symfony/routing/Annotation/Route.php',
        'Symfony\\Component\\Routing\\CompiledRoute' => __DIR__ . '/..' . '/symfony/routing/CompiledRoute.php',
        'Symfony\\Component\\Routing\\DependencyInjection\\RoutingResolverPass' => __DIR__ . '/..' . '/symfony/routing/DependencyInjection/RoutingResolverPass.php',
        'Symfony\\Component\\Routing\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/routing/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Routing\\Exception\\InvalidParameterException' => __DIR__ . '/..' . '/symfony/routing/Exception/InvalidParameterException.php',
        'Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException' => __DIR__ . '/..' . '/symfony/routing/Exception/MethodNotAllowedException.php',
        'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException' => __DIR__ . '/..' . '/symfony/routing/Exception/MissingMandatoryParametersException.php',
        'Symfony\\Component\\Routing\\Exception\\NoConfigurationException' => __DIR__ . '/..' . '/symfony/routing/Exception/NoConfigurationException.php',
        'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException' => __DIR__ . '/..' . '/symfony/routing/Exception/ResourceNotFoundException.php',
        'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException' => __DIR__ . '/..' . '/symfony/routing/Exception/RouteNotFoundException.php',
        'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator' => __DIR__ . '/..' . '/symfony/routing/Generator/CompiledUrlGenerator.php',
        'Symfony\\Component\\Routing\\Generator\\ConfigurableRequirementsInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/ConfigurableRequirementsInterface.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/CompiledUrlGeneratorDumper.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\GeneratorDumper' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/GeneratorDumper.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\GeneratorDumperInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/GeneratorDumperInterface.php',
        'Symfony\\Component\\Routing\\Generator\\UrlGenerator' => __DIR__ . '/..' . '/symfony/routing/Generator/UrlGenerator.php',
        'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/UrlGeneratorInterface.php',
        'Symfony\\Component\\Routing\\Loader\\AnnotationClassLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AnnotationClassLoader.php',
        'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AnnotationDirectoryLoader.php',
        'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AnnotationFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\ClosureLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/ClosureLoader.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\CollectionConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/CollectionConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\ImportConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/ImportConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\RouteConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/RouteConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/RoutingConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\AddTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/AddTrait.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\HostTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/HostTrait.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\LocalizedRouteTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\PrefixTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\RouteTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/RouteTrait.php',
        'Symfony\\Component\\Routing\\Loader\\ContainerLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/ContainerLoader.php',
        'Symfony\\Component\\Routing\\Loader\\DirectoryLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/DirectoryLoader.php',
        'Symfony\\Component\\Routing\\Loader\\GlobFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/GlobFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\ObjectLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/ObjectLoader.php',
        'Symfony\\Component\\Routing\\Loader\\PhpFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/PhpFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\XmlFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/XmlFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\YamlFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/YamlFileLoader.php',
        'Symfony\\Component\\Routing\\Matcher\\CompiledUrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/CompiledUrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/CompiledUrlMatcherDumper.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/CompiledUrlMatcherTrait.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\MatcherDumper' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/MatcherDumper.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\MatcherDumperInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/MatcherDumperInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\StaticPrefixCollection' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php',
        'Symfony\\Component\\Routing\\Matcher\\ExpressionLanguageProvider' => __DIR__ . '/..' . '/symfony/routing/Matcher/ExpressionLanguageProvider.php',
        'Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/RedirectableUrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/RedirectableUrlMatcherInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/RequestMatcherInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/TraceableUrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\UrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/UrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/UrlMatcherInterface.php',
        'Symfony\\Component\\Routing\\RequestContext' => __DIR__ . '/..' . '/symfony/routing/RequestContext.php',
        'Symfony\\Component\\Routing\\RequestContextAwareInterface' => __DIR__ . '/..' . '/symfony/routing/RequestContextAwareInterface.php',
        'Symfony\\Component\\Routing\\Route' => __DIR__ . '/..' . '/symfony/routing/Route.php',
        'Symfony\\Component\\Routing\\RouteCollection' => __DIR__ . '/..' . '/symfony/routing/RouteCollection.php',
        'Symfony\\Component\\Routing\\RouteCollectionBuilder' => __DIR__ . '/..' . '/symfony/routing/RouteCollectionBuilder.php',
        'Symfony\\Component\\Routing\\RouteCompiler' => __DIR__ . '/..' . '/symfony/routing/RouteCompiler.php',
        'Symfony\\Component\\Routing\\RouteCompilerInterface' => __DIR__ . '/..' . '/symfony/routing/RouteCompilerInterface.php',
        'Symfony\\Component\\Routing\\Router' => __DIR__ . '/..' . '/symfony/routing/Router.php',
        'Symfony\\Component\\Routing\\RouterInterface' => __DIR__ . '/..' . '/symfony/routing/RouterInterface.php',
        'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/AmqpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ArgsStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/Caster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ClassStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ConstStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutArrayStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DOMCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DateCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsPairStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/EnumStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FrameStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\GmpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/GmpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImagineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImagineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImgStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImgStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\IntlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/IntlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/LinkStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MemcachedCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PdoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ProxyManagerCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RdKafkaCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RedisCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SplCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/StubCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/TraceStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\UuidCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/UuidCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Cursor.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Data.php',
        'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/DumperInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Stub.php',
        'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/VarCloner.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand' => __DIR__ . '/..' . '/symfony/var-dumper/Command/ServerDumpCommand.php',
        'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/CliDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextualizedDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextualizedDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ServerDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ServerDumper.php',
        'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/..' . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Symfony\\Component\\VarDumper\\Server\\Connection' => __DIR__ . '/..' . '/symfony/var-dumper/Server/Connection.php',
        'Symfony\\Component\\VarDumper\\Server\\DumpServer' => __DIR__ . '/..' . '/symfony/var-dumper/Server/DumpServer.php',
        'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/..' . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/..' . '/symfony/var-dumper/VarDumper.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php81\\Php81' => __DIR__ . '/..' . '/symfony/polyfill-php81/Php81.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f5ad2f1c7a8dbb8174c9008f7590822::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f5ad2f1c7a8dbb8174c9008f7590822::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f5ad2f1c7a8dbb8174c9008f7590822::$classMap;

        }, null, ClassLoader::class);
    }
}
