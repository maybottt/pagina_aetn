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

/* themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque-informando-al-usuario-sector-nuclear.html.twig */
class __TwigTemplate_c4c0e8d573e4bda42127fc87810b9478 extends Template
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
        // line 19
        yield "<div id=\"enlaces-interes\">
  <div id=\"enlacesCarrousel\" class=\"row mx-auto my-2 justify-content-center enlaces";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 20), "html", null, true);
        yield "\">
    <div style=\"display: flex;\" id=\"carousel";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 21), "html", null, true);
        yield "\" class=\"carousel slide\" data-bs-ride=\"carousel\">
      
      <div class=\"position-relative mx-2\">
        <a class=\"position-absolute top-50 start-50 translate-middle\" href=\"#carousel";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 24), "html", null, true);
        yield "\" role=\"button\"
           data-bs-slide=\"prev\">
          <i class=\"align-middle bi bi-caret-left-fill\"></i>
        </a>
      </div>

      <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 31
        $context["bandera"] = true;
        // line 32
        yield "        
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 34
            yield "          ";
            $context["archivo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 34)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 34), "#row", [], "array", false, false, true, 34)), "_entity", [], "any", false, false, true, 34), "field_archivo", [], "any", false, false, true, 34), "entity", [], "any", false, false, true, 34);
            // line 35
            yield "          ";
            if (($context["archivo"] ?? null)) {
                // line 36
                yield "            ";
                $context["enlace"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["archivo"] ?? null), "getFileUri", [], "method", false, false, true, 36));
                // line 37
                yield "            ";
                $context["descripcion"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37), "#row", [], "array", false, false, true, 37)), "_entity", [], "any", false, false, true, 37), "field_descripcion_enlaceinteres", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37);
                // line 38
                yield "
            <div class=\"carousel-item ";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bandera"] ?? null)) ? ("active") : ("")));
                yield " mt-2\">
              <div class='col-6 col-md-3'>
                <div class='card'>
                  <div class='card-body text-center'>
                    <img style=\"object-fit: contain;\" src='";
                // line 43
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#row"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 43), "#row", [], "array", false, false, true, 43)), "_entity", [], "any", false, false, true, 43), "field_imagen_enlaceinteres", [], "any", false, false, true, 43), "entity", [], "any", false, false, true, 43), "getFileUri", [], "method", false, false, true, 43)), "html", null, true);
                yield "'
                         class='card-img-top mx-auto' alt='imagen' width='50' height='210'>
                  </div>
                  <div class='card-footer bg-transparent' style='border: none;'>
                    <div class='row justify-content-center'>
                      <div class='col-auto px-0'>
                        <a style=\"display: flex; align-items: center;\" href=\"";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["enlace"] ?? null), "html", null, true);
                yield "\" target=\"_blank\">
                          <p class='card-text px-0 mb-0'>";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["descripcion"] ?? null), "html", null, true);
                yield "</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            ";
                // line 58
                $context["bandera"] = false;
                // line 59
                yield "          ";
            }
            // line 60
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "      </div>

      <div class=\"position-relative mx-2\">
        <a class=\"position-absolute top-50 start-50 translate-middle\" href=\"#carousel";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 64), "html", null, true);
        yield "\" role=\"button\"
           data-bs-slide=\"next\">
          <i class=\"bi bi-caret-right-fill\"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
  var dato  = \"";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 74), "html", null, true);
        yield "\"
  let items";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 75), "html", null, true);
        yield " = document.querySelectorAll('.enlaces";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 75), "html", null, true);
        yield " .carousel .carousel-item')
  items";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 76), "html", null, true);
        yield ".forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
      if (!next) {
        next = items";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "dom_id", [], "any", false, false, true, 81), "html", null, true);
        yield "[0]
      }
      let cloneChild = next.cloneNode(true)
      el.appendChild(cloneChild.children[0])
      next = next.nextElementSibling
    }
  })
</script>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["view", "rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque-informando-al-usuario-sector-nuclear.html.twig";
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
        return array (  169 => 81,  161 => 76,  155 => 75,  151 => 74,  138 => 64,  133 => 61,  127 => 60,  124 => 59,  122 => 58,  111 => 50,  107 => 49,  98 => 43,  91 => 39,  88 => 38,  85 => 37,  82 => 36,  79 => 35,  76 => 34,  72 => 33,  69 => 32,  67 => 31,  57 => 24,  51 => 21,  47 => 20,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque-informando-al-usuario-sector-nuclear.html.twig", "/opt/drupal/web/themes/custom/gobbo_tema/templates/views/views-view-unformatted--bloque-informando-al-usuario-sector-nuclear.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 31, "for" => 33, "if" => 35];
        static $filters = ["escape" => 20];
        static $functions = ["file_url" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
                ['file_url'],
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
