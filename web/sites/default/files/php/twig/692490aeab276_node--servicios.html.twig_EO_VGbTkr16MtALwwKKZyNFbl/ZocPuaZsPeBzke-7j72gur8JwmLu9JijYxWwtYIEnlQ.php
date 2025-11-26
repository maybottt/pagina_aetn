<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/gobbo_tema/templates/content/node--servicios.html.twig */
class __TwigTemplate_2846aee499b9181ef5eef107c49e9843 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        yield "


<article id='nota-prensa'>

\t<div
\t\tclass=\"container pt-0 detalle-nota\">


\t\t<div class=\"row pt-4 pb-0 mb-0\">
\t\t\t<div class='col-sm-8 '>
\t\t\t  <nav aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t  <li class=\"breadcrumb-item\">
\t\t\t\t\t<a href=\"";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\">Inicio</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t\t";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = ($context["content"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["field_titulo_servicios"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_servicios", [], "array", false, false, true, 79))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["content"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["field_titulo_servicios"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_servicios", [], "array", false, false, true, 79)), "#items", [], "array", false, false, true, 79)), "value", [], "any", false, false, true, 79), "html", null, true);
        yield "
\t\t\t\t\t";
        // line 81
        yield "\t\t\t\t  </li>
\t\t
\t\t\t\t</ol>
\t\t\t  </nav>
\t\t\t</div>
\t\t  </div>


\t\t  ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, (($_v3 = (($_v4 = ($context["content"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["field_api_gobbo_servicios"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_api_gobbo_servicios", [], "array", false, false, true, 89))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["content"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["field_api_gobbo_servicios"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_api_gobbo_servicios", [], "array", false, false, true, 89)), "#items", [], "array", false, false, true, 89)), "value", [], "any", false, false, true, 89) == 0)) {
            // line 90
            yield "\t\t  <div class=\"row\">
\t\t\t<div class='col-12 col-sm-12 col-md-10 col-lg-9'>
\t\t\t\t<div class=\"py-2\" style='border: none;'>

\t\t\t\t\t<div class=\"card-body pt-0\">

\t\t\t\t\t\t<h2>";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = (($_v7 = ($context["content"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["field_titulo_servicios"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_servicios", [], "array", false, false, true, 96))) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["content"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["field_titulo_servicios"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_servicios", [], "array", false, false, true, 96)), "#items", [], "array", false, false, true, 96)), "value", [], "any", false, false, true, 96), "html", null, true);
            yield "</h2>
\t\t\t\t\t\t<div class=\"text-lg-end\" style='margin-bottom: 20px;'>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pt-2 texto-default\" id=\"contenido-nota-prensa\" style=\"text-align: justify;\">";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_contenido_servicios", [], "any", false, false, true, 99), "value", [], "any", false, false, true, 99));
            yield "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t  ";
        } else {
            // line 106
            yield "\t\t    <section style=\"z-index: 3;\" id=\"actualizacion-tramite\">
    <div style=\"z-index: 4;\" class=\"container py-4 texto-descripcion-sitio\">
      <div class=\"row\">
        <div class=\"col-12 col-md-12\">
          <iframe id='myIframe' style=\"border-radius: 20px; border:none; z-index: 5; overflow: auto; width: 100%; \"
            src=\"";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url_servicio"] ?? null), "html", null, true);
            yield "\">
          </iframe>
        </div>
      </div>
    </div>
  </section>
\t\t  ";
        }
        // line 118
        yield "





\t</div>
</article>

  <script>
    var url = JSON.parse(\"";
        // line 128
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, json_encode(($context["url_servicio"] ?? null)), "js"), "html", null, true);
        yield "\");
    //console.log('OSO url.......', url);
    const themeToggle = document.getElementById('theme-switcher-button');
    var iframe = document.getElementById('myIframe');
    var userTheme = localStorage.getItem('theme');
    cambiar_tema_iframe(userTheme);
    themeToggle.addEventListener('click', function () {
      userTheme = localStorage.getItem('theme');
      cambiar_tema_iframe(userTheme == 'dark' ? 'light' : 'dark');

    })

    function cambiar_tema_iframe(theme) {
      // console.log('OSO Theme:', theme)
      iframe.setAttribute('src', url + '?theme=' + theme);
    }
  </script>
  <script>
    var base_url = url.toString().split('.bo')[0] + '.bo';
    window.addEventListener('message', (event) => {
      // // Asegúrate de validar el origen del mensaje
      console.log('OSO BASE URL', base_url)
      if (event.origin !== base_url) {
        return;
      }
      console.log('OSO EVENTOS Mensaje', event.data);

      // Procesa el mensaje recibido
      if (event.data.type === 'setHeight' ) {
        // const iframe = document.getElementById('myIframe');
        // console.log('IFRAME', iframe);
        iframe.style.height = event.data.valor + 'px';
      }
    });

  </script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "node", "url_servicio"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/content/node--servicios.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  136 => 128,  124 => 118,  114 => 111,  107 => 106,  97 => 99,  91 => 96,  83 => 90,  81 => 89,  71 => 81,  67 => 79,  61 => 76,  44 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/content/node--servicios.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/content/node--servicios.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 89];
        static $filters = ["escape" => 62, "raw" => 99, "e" => 128, "json_encode" => 128];
        static $functions = ["attach_library" => 62, "url" => 76];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'e', 'json_encode'],
                ['attach_library', 'url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
