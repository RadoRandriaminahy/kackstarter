<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* projects/index.html.twig */
class __TwigTemplate_38fa6e895a5ff6067e0206fcd5ac4afc846addbd10d1fbc343419a657219cbd5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects/index.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 1, $this->source); })())), "html", null, true);
        echo " Projects</h1>

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 4
            echo "    <article>
        <h2> ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo " </h2>
        <p> ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 6), "html", null, true);
            echo " </p>
        <ul>
            <li><strong>Date</strong>: ";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "expiredOn", [], "any", false, false, false, 8)), "html", null, true);
            echo "</li>
            <li><strong>Locatiion</strong>: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "website", [], "any", false, false, false, 9), "html", null, true);
            echo "</li>
            <li><strong>Price</strong>: \$";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "targetAmount", [], "any", false, false, false, 10), "html", null, true);
            echo "</li>
        </ul>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "projects/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  73 => 10,  69 => 9,  65 => 8,  60 => 6,  56 => 5,  53 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{ projects|length }} Projects</h1>

{%  for project in projects %}
    <article>
        <h2> {{ project.name }} </h2>
        <p> {{ project.description }} </p>
        <ul>
            <li><strong>Date</strong>: {{ project.expiredOn|date }}</li>
            <li><strong>Locatiion</strong>: {{ project.website }}</li>
            <li><strong>Price</strong>: \${{ project.targetAmount }}</li>
        </ul>
    </article>
{%  endfor %}


", "projects/index.html.twig", "C:\\Users\\Rado\\Desktop\\Symfony\\kackstarter\\app\\Resources\\views\\projects\\index.html.twig");
    }
}
