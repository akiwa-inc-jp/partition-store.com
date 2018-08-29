<?php

/* __string_template__69157ee4c82f308fa3bbc7db3275936d9d091c77a3cfac4cfac4c4030a5156ea */
class __TwigTemplate_e39ad068a2de204cb20f4928af542cf67f69618291639dab4e980cc74c28b0ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__69157ee4c82f308fa3bbc7db3275936d9d091c77a3cfac4cfac4c4030a5156ea", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["body_class"] = "front_page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "<script>
\$(function(){
    \$('.main_visual').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        speed: 300
    });
});
</script>
";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"row\">
       <div class=\"col-sm-12\">
            <div class=\"main_visual\">
                <div class=\"item\">
                  <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv01.jpg\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv02.jpg\">
                </div>
                <div class=\"item\">
                  <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/top/mv03.jpg\">
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__69157ee4c82f308fa3bbc7db3275936d9d091c77a3cfac4cfac4c4030a5156ea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  64 => 26,  58 => 23,  52 => 19,  49 => 18,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__69157ee4c82f308fa3bbc7db3275936d9d091c77a3cfac4cfac4c4030a5156ea", "");
    }
}
