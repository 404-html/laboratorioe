<?php

/* :coleccion:new.html.twig */
class __TwigTemplate_abf096555a09f27d4176949e40a517bc1d62267822cc3ca453078691ee0480c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coleccion:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65e3af5ba8828996b9886fbd02527be93f0defdb51e7bc9d5ecdac8ba95df864 = $this->env->getExtension("native_profiler");
        $__internal_65e3af5ba8828996b9886fbd02527be93f0defdb51e7bc9d5ecdac8ba95df864->enter($__internal_65e3af5ba8828996b9886fbd02527be93f0defdb51e7bc9d5ecdac8ba95df864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coleccion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e3af5ba8828996b9886fbd02527be93f0defdb51e7bc9d5ecdac8ba95df864->leave($__internal_65e3af5ba8828996b9886fbd02527be93f0defdb51e7bc9d5ecdac8ba95df864_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c66af693c071050b6b7fed3421aa97988783646df8f77f1159783b9e5255de05 = $this->env->getExtension("native_profiler");
        $__internal_c66af693c071050b6b7fed3421aa97988783646df8f77f1159783b9e5255de05->enter($__internal_c66af693c071050b6b7fed3421aa97988783646df8f77f1159783b9e5255de05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Crear Colección ";
        
        $__internal_c66af693c071050b6b7fed3421aa97988783646df8f77f1159783b9e5255de05->leave($__internal_c66af693c071050b6b7fed3421aa97988783646df8f77f1159783b9e5255de05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b03ff02aa235df04534eeea7cc9199050ead180debe8838e21c7f83bee906542 = $this->env->getExtension("native_profiler");
        $__internal_b03ff02aa235df04534eeea7cc9199050ead180debe8838e21c7f83bee906542->enter($__internal_b03ff02aa235df04534eeea7cc9199050ead180debe8838e21c7f83bee906542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Crear Colección  </h3>
<hr />
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "coleccion", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"categoria\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors');
        echo "                
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"libro\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "                
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
<table>
<tr>
<th>             
    <button type=\"submit\" class=\"btn btn-success\">Registrar</button>
</th> 
<th>             
    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("coleccion_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                           
    </div>
";
        
        $__internal_b03ff02aa235df04534eeea7cc9199050ead180debe8838e21c7f83bee906542->leave($__internal_b03ff02aa235df04534eeea7cc9199050ead180debe8838e21c7f83bee906542_prof);

    }

    public function getTemplateName()
    {
        return ":coleccion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  104 => 29,  92 => 20,  88 => 19,  83 => 17,  76 => 13,  72 => 12,  67 => 10,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Crear Colección {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Crear Colección  </h3>*/
/* <hr />*/
/* {{ form_start(form, { 'attr': {'id':'coleccion','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">{{ form_label(form.categoria) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.categoria) }}                */
/*                 {{form_widget(form.categoria,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libro">{{ form_label(form.descripcion) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.descripcion) }}                */
/*                 {{form_widget(form.descripcion,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <button type="submit" class="btn btn-success">Registrar</button>*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('coleccion_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/*         {{ form_end(form) }}                           */
/*     </div>*/
/* {% endblock %}*/
/* */
