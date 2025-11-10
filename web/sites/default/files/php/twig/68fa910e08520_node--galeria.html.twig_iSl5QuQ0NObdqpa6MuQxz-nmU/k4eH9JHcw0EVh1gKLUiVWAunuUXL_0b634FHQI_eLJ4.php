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

/* themes/gobbo_tema/templates/content/node--galeria.html.twig */
class __TwigTemplate_d34df2f7a24db09396749e577fa2dae2 extends Template
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

";
        // line 65
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), "clearfix"];
        // line 75
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 75), "html", null, true);
        yield " id=\"galeria\">

\t<div class=\"row pt-4 pb-0 mb-0\">
\t\t<div class='col-sm-8 '>
\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\">Inicio</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t\t\t\t";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 85), "value", [], "any", false, false, true, 85), "html", null, true);
        yield "
\t\t\t\t\t\t";
        // line 87
        yield "\t\t\t\t\t</li>

\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t</div>
\t<h2>
\t\t";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), "html", null, true);
        yield "</h2>

\t<div";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix", "texto-default"], "method", false, false, true, 96), "html", null, true);
        yield ">
\t\t<p class=\"card-title parrafo-fecha texto-default\">";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_lugar_galeria", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97), "html", null, true);
        yield ",
\t\t\t";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_fecha_galeria", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98), "j F"), "html", null, true);
        yield "
\t\t\tde
\t\t\t";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_fecha_galeria", [], "any", false, false, true, 100), "value", [], "any", false, false, true, 100), "Y"), "html", null, true);
        yield "

\t\t</p>
\t</div>


\t<div class=\"texto-default\">
\t\t<div class=\"row mt-3 gallery\" onclick=\"openLightbox(event)\">
\t\t\t";
        // line 109
        yield "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_multimedias_galeria", [], "any", false, false, true, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 110
            yield "\t\t\t\t";
            // line 111
            yield "\t\t\t\t";
            if (CoreExtension::inFilter("video", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["media"], "entity", [], "any", false, false, true, 111), "filemime", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111))) {
                // line 112
                yield "\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t<video controls src=\"";
                // line 113
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["media"], "entity", [], "any", false, false, true, 113), "getFileUri", [], "method", false, false, true, 113)), "html", null, true);
                yield "\" autoplay height=\"300px\" width=\"100%\">
\t\t\t\t\t\tTu navegador no admite el elemento <code>video</code>.
\t\t\t\t\t</video>
\t\t\t\t\t<hr>
\t\t\t\t\t<p class=\"texto-imagen\">";
                // line 117
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["media"], "description", [], "any", false, false, true, 117), "html", null, true);
                yield "</p>
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 121
                yield "
\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t<img style=\"object-fit: cover; cursor:zoom-in\" src=\"";
                // line 123
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["media"], "entity", [], "any", false, false, true, 123), "getFileUri", [], "method", false, false, true, 123)), "html", null, true);
                yield "\" alt=\"\" height=\"300px\" width=\"100%\">
\t\t\t\t\t<hr>
\t\t\t\t\t<p class=\"texto-imagen\">";
                // line 125
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["media"], "description", [], "any", false, false, true, 125), "html", null, true);
                yield "</p>
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 128
            yield " 
\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['media'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "
\t\t</div>
\t</div>


\t<div id=\"lightbox\">
\t\t<button id=\"close-btn\" type=\"button\" class=\"btn-close\" onclick=\"closeLightbox()\"></button>
\t\t<!-- Main lightbox image -->
\t\t<img
\t\tid=\"lightbox-img\" src=\"\" alt=\"lightbox image\">

\t\t<!-- Thumbnails container -->
\t\t<div
\t\t\tid=\"thumbnail-container\"><!-- Thumbnails will be added dynamically using JavaScript -->
\t\t</div>

\t\t<!-- Previous and Next buttons -->
\t\t<button id=\"prev-btn\" class=\"btn\" onclick=\"changeImage(-1)\">&nbsp;<i class=\"bi bi-caret-left-fill\"></i>&nbsp;</button>
\t\t<button id=\"next-btn\" class=\"btn\" onclick=\"changeImage(1)\">&nbsp;<i class=\"bi bi-caret-right-fill\"></i>&nbsp;</button>
\t</div>
</article>


<script>
\tlet currentIndex = 0;
const images = document.querySelectorAll('.gallery img');
const totalImages = images.length;
function openLightbox(event) {
console.log('CLIC en imagne', event)
if (event.target.tagName === 'IMG') {
const clickedIndex = Array.from(images).indexOf(event.target);
currentIndex = clickedIndex;
updateLightboxImage();
document.getElementById('lightbox').style.display = 'flex';
}
}

function closeLightbox() {
document.getElementById('lightbox').style.display = 'none';
}

function changeImage(direction) {
currentIndex += direction;
if (currentIndex >= totalImages) {
currentIndex = 0;
} else if (currentIndex < 0) {
currentIndex = totalImages - 1;
}
updateLightboxImage();
}

function updateLightboxImage() {
const lightboxImg = document.getElementById('lightbox-img');
const thumbnailContainer = document.getElementById('thumbnail-container');

lightboxImg.src = images[currentIndex].src;

thumbnailContainer.innerHTML = '';

images.forEach((image, index) => {
const thumbnail = document.createElement('img');
thumbnail.src = image.src;
thumbnail.alt = `Thumbnail \${
index + 1
}`;
thumbnail.classList.add('thumbnail');
thumbnail.addEventListener('click', () => updateMainImage(index));
thumbnailContainer.appendChild(thumbnail);
});

const thumbnails = document.querySelectorAll('.thumbnail');
thumbnails[currentIndex].classList.add('active-thumbnail');
}

function updateMainImage(index) {
currentIndex = index;
updateLightboxImage();
}

updateLightboxImage();

document.addEventListener('keydown', function (e) {
if (document.getElementById('lightbox').style.display === 'flex') {
if (e.key === 'ArrowLeft') {
changeImage(-1);
} else if (e.key === 'ArrowRight') {
changeImage(1);
}
}
});
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/gobbo_tema/templates/content/node--galeria.html.twig";
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
        return array (  166 => 131,  158 => 128,  151 => 125,  146 => 123,  142 => 121,  135 => 117,  128 => 113,  125 => 112,  122 => 111,  120 => 110,  115 => 109,  104 => 100,  99 => 98,  95 => 97,  91 => 96,  86 => 94,  77 => 87,  73 => 85,  67 => 82,  56 => 75,  54 => 71,  53 => 70,  52 => 69,  51 => 68,  50 => 67,  49 => 65,  44 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/gobbo_tema/templates/content/node--galeria.html.twig", "/opt/drupal/web/themes/gobbo_tema/templates/content/node--galeria.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 65, "for" => 109, "if" => 111];
        static $filters = ["escape" => 62, "clean_class" => 67, "date" => 98];
        static $functions = ["attach_library" => 62, "url" => 82, "file_url" => 113];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'clean_class', 'date'],
                ['attach_library', 'url', 'file_url'],
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
