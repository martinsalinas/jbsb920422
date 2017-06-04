<?php

/* HomeBundle:Home:editClothPiece.html.twig */
class __TwigTemplate_35a6615255c526dc2e14fadbf97a13ecc63a02a3e666d0b3302a3bdafbdf9e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baabd80475cf7e0ac4dbca8829ad5095216f9c41e486b50c17c7d81e7032e95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baabd80475cf7e0ac4dbca8829ad5095216f9c41e486b50c17c7d81e7032e95c->enter($__internal_baabd80475cf7e0ac4dbca8829ad5095216f9c41e486b50c17c7d81e7032e95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle:Home:editClothPiece.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form", "id" => ((array_key_exists("id3", $context)) ? (_twig_default_filter((isset($context["id3"]) ? $context["id3"] : $this->getContext($context, "id3")), "form")) : ("form")))));
        echo "

                                                
";
        // line 5
        echo "<div ";
        echo " role=\"document\"  style=\"background-color: white;\">
";
        // line 7
        echo "        ";
        // line 11
        echo "        <div class=\"modal-body\">
            <div class=\"form-group\">
                <center>
                <table border=\"0\">
                    <tr>
                        <td align=\"right\">
                            <input type=\"text\" id=\"idTxtClothType\" placeholder=\"jbSB92\" style=\"width: 100%; height: 30px\"/>
                        <td width=\"10px\">
                        <td align=\"left\">
                            <a style=\"background-color: purple; border-color: purple;\" class=\"btn btn-sm btn-success batpf glyphicon glyphicon-plus\" onclick=\"addClothTypeName();\">
                                ";
        // line 22
        echo "                            </a>
                        </td>
                    <tr>
                        <td>
                            <span class=\"text-danger\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "name", array()), 'errors');
        echo "</span>
                        </td>
                    </tr>
                </table>
                </center>
            </div>

            <div class=\"panel panel-default\">

                <!-- Table -->
";
        // line 51
        echo "
                <div class=\"panel-group div-tipo-prenda-neon\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"menu-prenda\">
                        
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clothType"]) ? $context["clothType"] : $this->getContext($context, "clothType")));
        foreach ($context['_seq'] as $context["_key"] => $context["clothesTypes"]) {
            // line 56
            echo "                            <div class=\"panel-heading\" role=\"tab\" id=\"headingTipoPrenda";
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\">
                                <table width=\"100%\" border=\"0\">
                                    <tr data-id3 = \"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\">
                                        <td";
            // line 59
            echo ">
                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTipoPrenda";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\" class=\"tipoPrendaLinkAccordion\" aria-expanded=\"true\" aria-controls=\"collapseTipoPrenda";
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "name", array()), "html", null, true);
            echo "
                                            </a>
                                        <td width=\"40 px\" align=\"right\">
                                            <a href=\"#collapseExample";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\" class=\"btn glyphicon glyphicon-pencil boton-agregar-tipoPrenda-neon boton-agregar-tipoPrenda-neon";
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\" id=\"boton-agregar-tipoPrenda";
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\" style=\"display:none\"
                                                role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\" data-toggle=\"collapse\">
                                                ";
            // line 67
            echo "                                            </a>
                                        <td width=\"40 px\" align=\"right\" data-id=";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo ">
                                            <a href=\"#\" class=\"btn glyphicon glyphicon-remove boton-eliminar-tipoPrenda-neon\" onclick=\"eliminarTipoPrenda(";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo ");\">
                                                ";
            // line 71
            echo "                                            </a>
                                        </td>
                                        
                                        
";
            // line 77
            echo "                                                ";
            // line 80
            echo "                                    </tr>
                                </table>
                            </div>
                            <div id=\"collapseTipoPrenda";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTipoPrenda";
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\">
                                <div class=\"panel-body\">

                                    ";
            // line 87
            echo "                                        <div class=\"panel-group div-prenda-neon\" id=\"accordion2\" role=\"tablist\" aria-multiselectable=\"true\">
                                            <div class=\"panel panel-default\">
                                                <div class=\"collapse\" id=\"collapseExample";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\">

";
            // line 92
            echo "                                                    <table width='100%' data-id56=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\" border=\"0\">
                                                        <tr>
                                                            <td>
                                                                <input type=\"text\" name=\"txtPrenda\" id=\"idTxtNombrePrenda";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\" placeholder=\"Nombre de la Prenda\" style=\"width:100%; height:30px\">
                                                            <td width=\"10px\">
                                                            <td width=\"37px\" align=right>
                                                                <a class=\"btn btn-sm btn-success bapf glyphicon glyphicon-ok\">

                                                                </a>
                                                            </td>
                                                        <tr>
                                                            <td colspan='3'>
                                                                <br>
                                                            </td>
                                                        <tr>
                                                            <td colspan='3'>
                                                                <textarea rows=\"3\" placeholder=\"What's up22?\" required style=\"width:100%;\" id=\"idTxtDescripcionPrenda";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\"></textarea>
                                                            </td>
                                                        <tr>
                                                            <td colspan=\"3\">
                                                                <div class=\"areaTres\">
                                                                    <div class=\"draggableClass areaUno draggable\">
                                                                        <table border=\"2\" id=\"despiecePrenda\" ";
            // line 114
            echo ">
                                                                            <tr>
                                                                                <td width=\"20%\" height=\"100%\">
                                                                                    <span class=\"glyphicon glyphicon-remove btn\" style=\"float: left;\">

                                                                                    </span>
                                                                                <td width=\"80%\" height=\"100%\">
                                                                                    ";
            // line 122
            echo "                                                                                    <textarea rows=\"3\" placeholder=\"class='draggableClass areaUno draggable'\" required style=\"width:100%; height: 100%; resize: none;\" id=\"idTxtDescripcionPrenda";
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\"></textarea>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class=\"contenedor\" 
                                                                     style=\"background-color: blue; 
                                                                     height: 300px; 
                                                                     position: relative; \">

                                                                    <div class=\"areaDos droppableClass\" 
                                                                         style=\"float: left; 
                                                                         overflow: scroll; 
                                                                         height: 100%; 
                                                                         width: 50%;\">
                                                                    </div>

                                                                    <div style=\"float: left; background-color: greenyellow; 
                                                                         width: 50%; position: initial; top: 0; bottom: 0; 
                                                                         overflow: scroll; height: 300px;\">

                                                                        <div class=\"containmentWrapper\"
                                                                             style=\"height: 100%; width: 100%;\">
                                                                            
                                                                            <div class=\"draggable2 resizableCutting\" 
                                                                                 style=\"opacity: 0.1; background-color: blue; border: black; \">
                                                                                <p>XXXXX</p>
                                                                            </div>

                                                                            <div class=\"draggable2 resizableCutting\" id=\"callejero\" 
                                                                                 style=\"opacity: 0.9; background-color: blue; border: black; \"
                                                                                 onclick=\"document.getElementById('callejero').style.backgroundColor = '#dad';\">
                                                                                <p>XXXXX</p>
                                                                            </div>

                                                                            <div class=\"draggable2 resizableCutting\" 
                                                                                 style=\"opacity: 0.1; background-color: blue; border: black; \">
                                                                                <p>XXXXX</p>
                                                                            </div>
                                                                            
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </div>

                                                <hr>

";
            // line 177
            echo "

                                                
                                                <div class=\"div-prenda-neon";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cloth"]) ? $context["cloth"] : $this->getContext($context, "cloth")));
            foreach ($context['_seq'] as $context["_key"] => $context["clothes"]) {
                // line 182
                echo "                                                        ";
                if (($this->getAttribute($context["clothesTypes"], "id", array()) == $this->getAttribute($context["clothes"], "clothType", array()))) {
                    // line 183
                    echo "                                                            ";
                    // line 184
                    echo "                                                            <div class=\"panel-heading\" role=\"tab\" id=\"headingPrenda";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "id", array()), "html", null, true);
                    echo "\">
                                                                <table class=\"table table-striped table-hover table-prendas-neon\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapsePrenda";
                    // line 189
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "id", array()), "html", null, true);
                    echo "\" aria-expanded=\"true\" aria-controls=\"collapsePrenda";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "id", array()), "html", null, true);
                    echo "\">
                                                                                    ";
                    // line 190
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "name", array()), "html", null, true);
                    echo "
                                                                                </a>
                                                                            </td>
                                                                            <td class=\"actions\" width=\"4%\">
                                                                                <a href=\"#\" class=\"glyphicon glyphicon-ok boton-agregar-prenda-neon\">
                                                                                    ";
                    // line 196
                    echo "                                                                                </a>
                                                                            </td>
                                                                            <td class=\"actions\" width=\"4%\" data-id=\"";
                    // line 198
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "id", array()), "html", null, true);
                    echo "\" data-id2=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
                    echo "\">
                                                                                <a href=\"#\" class=\"glyphicon glyphicon-remove boton-eliminar-prenda-neon\" onclick=\"eliminarPrenda(";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothesTypes"], "id", array()), "html", null, true);
                    echo ");\">
                                                                                    ";
                    // line 201
                    echo "                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            ";
                    // line 209
                    echo "                                                            <div id=\"collapsePrenda";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "id", array()), "html", null, true);
                    echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingPrenda";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "id", array()), "html", null, true);
                    echo "\">
                                                                <div class=\"panel-body\">
                                                                    <table class=\"table table-striped table-hover table-prendas-neon\">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan=\"3\">
                                                                                    ";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($context["clothes"], "description", array()), "html", null, true);
                    echo "
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        ";
                }
                // line 223
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clothes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                                                </div>
                                                
";
            // line 227
            echo "                                                
                                                
                                                
                                                
                                                
                                            </div>
                                        </div>                                    
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clothesTypes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                    </div>
                </div>
            </div>
        </div>
";
        // line 242
        echo "</div>


<div style=\"visibility: hidden;\">";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cloth type name", "disabled" => "disabled")));
        // line 246
        echo "</div>

";
        // line 249
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_end');
        echo "






<script>

    ";
        // line 272
        echo "
                function addClothTypeName() {
                    var form = \$('#add-cloth-type');
                    var url = form.attr('action');
                    var data = form.serialize();

                    var idTxtClothType = document.getElementById('idTxtClothType').value;

                    \$.post(url, {exampleVariable: idTxtClothType}, function (data)
                    {
                        
                        var varClothType_id = (data[0].clothType_id);
                        var varClothType_name = (data[0].clothType_name);
                        
                              \$(\"#menu-prenda\").append(
                            '<div class=\"panel-heading\" role=\"tab\" id=\"headingTipoPrenda' + varClothType_id + '\">'+
                                '<table width=\"100%\" border=\"0\">'+
                                    '<tr data-id3 = \"' + varClothType_id + '\">'+
                                        '<td";
        // line 290
        echo ">'+
                                            '<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTipoPrenda' + varClothType_id + '\" class=\"tipoPrendaLinkAccordion\" aria-expanded=\"true\" aria-controls=\"collapseTipoPrenda' + varClothType_id + '\" onclick=\"habilitarBotonAgregarPrenda(' + varClothType_id + ');\">'+
                                                varClothType_name +
                                            '</a>'+
                                        '<td width=\"40 px\" align=\"right\">'+
                                            '<a href=\"#collapseExample' + varClothType_id + '\" class=\"btn glyphicon glyphicon-pencil boton-agregar-tipoPrenda-neon boton-agregar-tipoPrenda-neon' + varClothType_id + '\" id=\"boton-agregar-tipoPrenda' + varClothType_id + '\" style=\"display:none\"'+
                                                'role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\" data-toggle=\"collapse\">'+
                                                ";
        // line 298
        echo "                                            '</a>'+                                            
                                        '<td width=\"40 px\" align=\"right\" data-id=' + varClothType_id + '>'+
                                            '<a href=\"#\" class=\"btn glyphicon glyphicon-remove boton-eliminar-tipoPrenda-neon\" onclick=\"eliminarTipoPrenda(' + varClothType_id + ');\">'+
                                                ";
        // line 302
        echo "                                            '</a>'+
                                        '</td>'+
                                    '</tr>'+
                                '</table>'+
                            '</div>'+
            '<div id=\"collapseTipoPrenda' + varClothType_id + '\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTipoPrenda' + varClothType_id + '\">'+
                                '<div class=\"panel-body\">'+

                                    ";
        // line 311
        echo "                                    '<div class=\"panel-group\" id=\"accordion2\" role=\"tablist\" aria-multiselectable=\"true\">'+
                                        '<div class=\"panel panel-default\">'+




                                            '<div class=\"collapse\" id=\"collapseExample' + varClothType_id + '\">'+

";
        // line 320
        echo "                                                    '<table width=\"100%\" data-id56=\"' + varClothType_id + '\" border=\"0\">'+
                                                        '<tr>'+
                                                            '<td>'+
                                                                '<input type=\"text\" name=\"txtPrenda\" id=\"idTxtNombrePrenda' + varClothType_id + '\" placeholder=\"Nombre de la Prenda\" style=\"width:100%; height:30px\">'+
                                                            '<td width=\"10px\">'+
                                                            '<td width=\"37px\" align=right>'+
                                                                '<a class=\"btn btn-sm btn-success bapf glyphicon glyphicon-ok\">'+

                                                                '</a>'+
                                                            '</td>'+
                                                        '<tr>'+
                                                            '<td colspan=\"3\">'+
                                                                '<br>'+
                                                            '</td>'+
                                                        '<tr>'+
                                                            '<td colspan=\"3\">'+
                                                                '<textarea rows=\"3\" placeholder=\"Whats up22?\" required style=\"width:100%;\" id=\"idTxtDescripcionPrenda' + varClothType_id + '\"></textarea>'+
                                                            '</td>'+
                                                        '<tr>'+
                                                            '<td colspan=\"3\">'+
                                                                '<div class=\"areaTres\">'+
                                                                    '<div class=\"draggableClass areaUno draggable\">'+
                                                                        '<table border=\"2\" id=\"despiecePrenda\" ";
        // line 342
        echo ">'+
                                                                            '<tr>'+
                                                                                '<td width=\"20%\" height=\"100%\">'+
                                                                                    '<span class=\"glyphicon glyphicon-remove btn\" style=\"float: left;\">'+

                                                                                    '</span>'+
                                                                                '<td width=\"80%\" height=\"100%\">'+
                                                                                    ";
        // line 350
        echo "                                                                                    '<textarea rows=\"3\" placeholder=\" \" class=\"draggableClass areaUno draggable\" required style=\"width:100%; height: 100%; resize: none;\" id=\"idTxtDescripcionPrenda' + varClothType_id + '\"></textarea>'+
                                                                                '</td>'+
                                                                            '</tr>'+
                                                                        '</table>'+
                                                                    '</div>'+
                                                                '</div>'+
                                                                '<div class=\"contenedor\" '+
                                                                     'style=\"background-color: blue; '+
                                                                     'height: 300px; '+
                                                                     'position: relative; \">'+

                                                                    '<div class=\"areaDos droppableClass\" '+
                                                                         'style=\"float: left; '+
                                                                         'overflow: scroll; '+
                                                                         'height: 100%; '+
                                                                         'width: 50%;\">'+
                                                                    '</div>'+

                                                                    '<div style=\"float: left; background-color: greenyellow; '+
                                                                         'width: 50%; position: initial; top: 0; bottom: 0; '+
                                                                         'overflow: scroll; height: 300px;\">'+

                                                                        '<div class=\"containmentWrapper\"'+
                                                                             'style=\"height: 100%; width: 100%;\">'+
                                                                            
                                                                            '<div class=\"draggable2 resizableCutting\" '+
                                                                                 'style=\"opacity: 0.1; background-color: blue; border: black; \">'+
                                                                                '<p>XXXXX</p>'+
                                                                            '</div>'+

                                                                            '<div class=\"draggable2 resizableCutting\" id=\"callejero\" '+
                                                                                 'style=\"opacity: 0.9; background-color: blue; border: black; \"'+
                                                                                 \"onclick=\"+\"document.getElementById('callejero').style.backgroundColor = '#dad';\"+\">\"+
                                                                                '<p>XXXXX</p>'+
                                                                            '</div>'+

                                                                            '<div class=\"draggable2 resizableCutting\" '+
                                                                                \"style='opacity: 0.1; background-color: blue; border: black; '>\"+
                                                                                '<p>XXXXX</p>'+
                                                                            '</div>'+
                                                                            
                                                                        '</div>'+


                                                                    '</div>'+
                                                                '</div>'+
                                                            '</td>'+
                                                        '</tr>'+
                                                    '</table>'+

                                                '</div>'+


                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>');
    ";
        // line 408
        echo "    ";
        // line 409
        echo "    ";
        // line 410
        echo "        
        
            }).fail(function () {
                alert(\"ERROR\");
            });
        }
        

    function eliminarTipoPrenda(idTipoPrenda) {
        ";
        // line 429
        echo "                alert(\"Este lo dejamos para después, ya que esta acción no es importante\");
    }   
</script>

<script>

    var contador = 0;
    var idAnterior = 0;
    \$(\".tipoPrendaLinkAccordion\").click(function ()
    {
        var tipoPrenda = \$(this).parents('tr');
        var idActual = tipoPrenda.data('id3');

        habilitarBotonAgregarPrenda(idActual);
    });

    function habilitarBotonAgregarPrenda(idActual)
    {
        
        console.log(idActual);
        contador++;

        if (idAnterior == idActual)
        {
            // se ha dado click sobre el mismo boton

            if (contador % 2 == 0)
            {
                // expandido
                document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'inline';
            } else
            {
                // recogido
                document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'none';
            }
        } else
        {
            if (idAnterior == 0)
            {
                // primera vez que se da click sobre cualquier boton de adicionar prenda

                contador = 0;

                if (contador % 2 == 0)
                {
                    // expandido
                    document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'inline';
                } else
                {
                    // recogido
                    document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'none';
                }
            } else
            {
                contador = 0;

                // borrar el boton del idAnterior
                document.getElementById(\"boton-agregar-tipoPrenda\" + idAnterior).style.display = 'none';

                if (contador % 2 == 0)
                {
                    // expandido
                    document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'inline';
                } else
                {
                    // recogido
                    document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'none';
                }
            }
        }
        idAnterior = idActual;
    }
</script>

<script>
    \$(function () {
        \$(\".droppableClass\").sortable({

        });

        \$(\".areaUno, .areaDos, .areaTres\").disableSelection();
        \$(\".draggable\").draggable({

        });
        \$(\".draggable2\").draggable({
            containment: \".containmentWrapper\",
            scroll: false
        });
    ";
        // line 524
        echo "                    \$(\".resizable\").resizable({
                        maxHeight: 700,
                        maxWidth: 200,
                        minHeight: 100,
                        minWidth: 200
                    });
                    \$(\".resizableCutting\").resizable({
                        maxHeight: 800,
                        maxWidth: 800,
                        minHeight: 50,
                        minWidth: 50,
                        aspectRatio: 16 / 9,
                        animate: true
                    });

";
        // line 542
        echo "                    
";
        // line 545
        echo "    
    
});


    \$(\".draggableClass\").click(function (){
";
        // line 552
        echo "        
        \$(this).addClass(\"felicidad\");
        alert(\"REPENT!\");
        
    });
    \$(\".areaUno\").click(function (){
        console.log(\"This is an example\");
    });
    \$(\".draggable\").click(function (){
        console.log(\"This is an example22\");
    });
    
    \$(\".felicidad\").click(function (){
        alert(\"REPENT22!\");
    });

   

        \$(\".draggableClass\").draggable({
            connectToSortable: \".droppableClass\",
            helper: \"clone\",
            revert: \"invalid\"
            ";
        // line 575
        echo "        });

";
        // line 584
        echo "</script>

<script>
    \$('.bapf').click(function () {
        alert(\"swish\");
    });
</script>";
        
        $__internal_baabd80475cf7e0ac4dbca8829ad5095216f9c41e486b50c17c7d81e7032e95c->leave($__internal_baabd80475cf7e0ac4dbca8829ad5095216f9c41e486b50c17c7d81e7032e95c_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:Home:editClothPiece.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 584,  695 => 575,  671 => 552,  663 => 545,  660 => 542,  643 => 524,  553 => 429,  542 => 410,  540 => 409,  538 => 408,  479 => 350,  470 => 342,  446 => 320,  436 => 311,  426 => 302,  421 => 298,  412 => 290,  392 => 272,  380 => 249,  376 => 246,  374 => 245,  369 => 242,  363 => 237,  348 => 227,  344 => 224,  338 => 223,  327 => 215,  315 => 209,  306 => 201,  300 => 199,  294 => 198,  290 => 196,  282 => 190,  276 => 189,  267 => 184,  265 => 183,  262 => 182,  258 => 181,  254 => 180,  249 => 177,  191 => 122,  182 => 114,  173 => 108,  157 => 95,  150 => 92,  145 => 89,  141 => 87,  133 => 83,  128 => 80,  126 => 77,  120 => 71,  116 => 69,  112 => 68,  109 => 67,  100 => 64,  94 => 61,  88 => 60,  85 => 59,  81 => 58,  75 => 56,  71 => 55,  65 => 51,  52 => 26,  46 => 22,  34 => 11,  32 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form3, { 'attr' : {'novalidate': 'novalidate', 'role' : 'form', 'id': id3|default('form')} }) }}

                                                
{#<div class=\"modal fade addClothing2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">#}
<div {#class=\"modal-dialog\"#} role=\"document\"  style=\"background-color: white;\">
{#    <div class=\"modal-content\">#}
        {#<div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">X</button>
            <center><h4 class=\"modal-title\" id=\"gridSystemModalLabel\">EDIT</h4></center>
        </div>#}
        <div class=\"modal-body\">
            <div class=\"form-group\">
                <center>
                <table border=\"0\">
                    <tr>
                        <td align=\"right\">
                            <input type=\"text\" id=\"idTxtClothType\" placeholder=\"jbSB92\" style=\"width: 100%; height: 30px\"/>
                        <td width=\"10px\">
                        <td align=\"left\">
                            <a style=\"background-color: purple; border-color: purple;\" class=\"btn btn-sm btn-success batpf glyphicon glyphicon-plus\" onclick=\"addClothTypeName();\">
                                {# ADICIONAR TIPO PRENDA BOTON CHULITO #}
                            </a>
                        </td>
                    <tr>
                        <td>
                            <span class=\"text-danger\">{{ form_errors(form3.name) }}</span>
                        </td>
                    </tr>
                </table>
                </center>
            </div>

            <div class=\"panel panel-default\">

                <!-- Table -->
{#                <table class=\"table table-striped table-hover table-tipo-prendas-neon\">
                    <thead>
                        <tr>
                            <th width=\"90%\">
                                {{ ('NAME') }}
                            </th>
                            <th width=\"10%\">
                                {{ ('ACTIONS') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>#}

                <div class=\"panel-group div-tipo-prenda-neon\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\" id=\"menu-prenda\">
                        
                        {% for clothesTypes in clothType %}
                            <div class=\"panel-heading\" role=\"tab\" id=\"headingTipoPrenda{{ clothesTypes.id }}\">
                                <table width=\"100%\" border=\"0\">
                                    <tr data-id3 = \"{{ clothesTypes.id }}\">
                                        <td{# width=\"80%\"#}>
                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTipoPrenda{{ clothesTypes.id }}\" class=\"tipoPrendaLinkAccordion\" aria-expanded=\"true\" aria-controls=\"collapseTipoPrenda{{ clothesTypes.id }}\">
                                                {{ clothesTypes.name }}
                                            </a>
                                        <td width=\"40 px\" align=\"right\">
                                            <a href=\"#collapseExample{{ clothesTypes.id }}\" class=\"btn glyphicon glyphicon-pencil boton-agregar-tipoPrenda-neon boton-agregar-tipoPrenda-neon{{ clothesTypes.id }}\" id=\"boton-agregar-tipoPrenda{{ clothesTypes.id }}\" style=\"display:none\"
                                                role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\" data-toggle=\"collapse\">
                                                {# adicionar #}
                                            </a>
                                        <td width=\"40 px\" align=\"right\" data-id={{ clothesTypes.id }}>
                                            <a href=\"#\" class=\"btn glyphicon glyphicon-remove boton-eliminar-tipoPrenda-neon\" onclick=\"eliminarTipoPrenda({{ clothesTypes.id }});\">
                                                {#  x  #}
                                            </a>
                                        </td>
                                        
                                        
{#                                        <td width=\"10%\" align=\"right\" data-id={{ tipoPrendas.id }}>#}
{#                                            <a href=\"#\" class=\"btn glyphicon glyphicon-remove boton-eliminar-tipoPrenda-neon\" onclick=\"eliminarTipoPrenda({{ tipoPrendas.id }});\">#}
                                                {#  x  #}
{#                                            </a>#}
{#                                        </td>#}
                                    </tr>
                                </table>
                            </div>
                            <div id=\"collapseTipoPrenda{{ clothesTypes.id }}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTipoPrenda{{ clothesTypes.id }}\">
                                <div class=\"panel-body\">

                                    {#desde aqui empieza el submenu#}
                                        <div class=\"panel-group div-prenda-neon\" id=\"accordion2\" role=\"tablist\" aria-multiselectable=\"true\">
                                            <div class=\"panel panel-default\">
                                                <div class=\"collapse\" id=\"collapseExample{{ clothesTypes.id }}\">

{#                                                    katy perry#}
                                                    <table width='100%' data-id56=\"{{ clothesTypes.id }}\" border=\"0\">
                                                        <tr>
                                                            <td>
                                                                <input type=\"text\" name=\"txtPrenda\" id=\"idTxtNombrePrenda{{ clothesTypes.id }}\" placeholder=\"Nombre de la Prenda\" style=\"width:100%; height:30px\">
                                                            <td width=\"10px\">
                                                            <td width=\"37px\" align=right>
                                                                <a class=\"btn btn-sm btn-success bapf glyphicon glyphicon-ok\">

                                                                </a>
                                                            </td>
                                                        <tr>
                                                            <td colspan='3'>
                                                                <br>
                                                            </td>
                                                        <tr>
                                                            <td colspan='3'>
                                                                <textarea rows=\"3\" placeholder=\"What's up22?\" required style=\"width:100%;\" id=\"idTxtDescripcionPrenda{{ clothesTypes.id }}\"></textarea>
                                                            </td>
                                                        <tr>
                                                            <td colspan=\"3\">
                                                                <div class=\"areaTres\">
                                                                    <div class=\"draggableClass areaUno draggable\">
                                                                        <table border=\"2\" id=\"despiecePrenda\" {#style=\"visibility: hidden;\"#}>
                                                                            <tr>
                                                                                <td width=\"20%\" height=\"100%\">
                                                                                    <span class=\"glyphicon glyphicon-remove btn\" style=\"float: left;\">

                                                                                    </span>
                                                                                <td width=\"80%\" height=\"100%\">
                                                                                    {#                                                                                    <input type=\"text\" name=\"txtPrenda\" id=\"idTxtNombrePrenda{{ tipoPrendas.id }}\" placeholder=\"Nombre del despiece\" style=\"float: right; width: 100%;\" rows=\"5\">#}
                                                                                    <textarea rows=\"3\" placeholder=\"class='draggableClass areaUno draggable'\" required style=\"width:100%; height: 100%; resize: none;\" id=\"idTxtDescripcionPrenda{{ clothesTypes.id }}\"></textarea>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class=\"contenedor\" 
                                                                     style=\"background-color: blue; 
                                                                     height: 300px; 
                                                                     position: relative; \">

                                                                    <div class=\"areaDos droppableClass\" 
                                                                         style=\"float: left; 
                                                                         overflow: scroll; 
                                                                         height: 100%; 
                                                                         width: 50%;\">
                                                                    </div>

                                                                    <div style=\"float: left; background-color: greenyellow; 
                                                                         width: 50%; position: initial; top: 0; bottom: 0; 
                                                                         overflow: scroll; height: 300px;\">

                                                                        <div class=\"containmentWrapper\"
                                                                             style=\"height: 100%; width: 100%;\">
                                                                            
                                                                            <div class=\"draggable2 resizableCutting\" 
                                                                                 style=\"opacity: 0.1; background-color: blue; border: black; \">
                                                                                <p>XXXXX</p>
                                                                            </div>

                                                                            <div class=\"draggable2 resizableCutting\" id=\"callejero\" 
                                                                                 style=\"opacity: 0.9; background-color: blue; border: black; \"
                                                                                 onclick=\"document.getElementById('callejero').style.backgroundColor = '#dad';\">
                                                                                <p>XXXXX</p>
                                                                            </div>

                                                                            <div class=\"draggable2 resizableCutting\" 
                                                                                 style=\"opacity: 0.1; background-color: blue; border: black; \">
                                                                                <p>XXXXX</p>
                                                                            </div>
                                                                            
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </div>

                                                <hr>

{#                                                <p>sh22</p>#}


                                                
                                                <div class=\"div-prenda-neon{{ clothesTypes.id }}\">
                                                    {% for clothes in cloth %}
                                                        {% if(clothesTypes.id == clothes.clothType) %}
                                                            {#titulo#}
                                                            <div class=\"panel-heading\" role=\"tab\" id=\"headingPrenda{{ clothes.id }}\">
                                                                <table class=\"table table-striped table-hover table-prendas-neon\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapsePrenda{{ clothes.id }}\" aria-expanded=\"true\" aria-controls=\"collapsePrenda{{ clothes.id }}\">
                                                                                    {{ clothes.name }}
                                                                                </a>
                                                                            </td>
                                                                            <td class=\"actions\" width=\"4%\">
                                                                                <a href=\"#\" class=\"glyphicon glyphicon-ok boton-agregar-prenda-neon\">
                                                                                    {# chulito #}
                                                                                </a>
                                                                            </td>
                                                                            <td class=\"actions\" width=\"4%\" data-id=\"{{ clothes.id }}\" data-id2=\"{{ clothesTypes.id }}\">
                                                                                <a href=\"#\" class=\"glyphicon glyphicon-remove boton-eliminar-prenda-neon\" onclick=\"eliminarPrenda({{ clothes.id }}, {{ clothesTypes.id }});\">
                                                                                    {# equis  #}
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            {#contenido#}
                                                            <div id=\"collapsePrenda{{ clothes.id }}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingPrenda{{ clothes.id }}\">
                                                                <div class=\"panel-body\">
                                                                    <table class=\"table table-striped table-hover table-prendas-neon\">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan=\"3\">
                                                                                    {{ clothes.description }}
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                                
{#                                                <p>sh22</p>#}
                                                
                                                
                                                
                                                
                                                
                                            </div>
                                        </div>                                    
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
{#    </div>#}
</div>


<div style=\"visibility: hidden;\">{{ form_widget(form3.name, { 'attr' : {'class' : 'form-control',
                        'placeholder' : 'Cloth type name', 'disabled' : 'disabled'} }) }}</div>

{#</div>#}
{{ form_end(form3) }}






<script>

    {#        var form = \$('#adicionar-tipo-prenda');
            var url = form.attr('action');
            var data = form.serialize();

            var idTxtTipoPrenda = document.getElementById('idTxtTipoPrenda').value;

            \$.post(url, {ejemploVariable: idTxtTipoPrenda}, function (data)
            {
                \$(\".div-tipo-prenda-neon\").load(\"refrescarTableTipoPrenda\");

            }).fail(function () {

                alert(\"ERROR\");
            });#}

                function addClothTypeName() {
                    var form = \$('#add-cloth-type');
                    var url = form.attr('action');
                    var data = form.serialize();

                    var idTxtClothType = document.getElementById('idTxtClothType').value;

                    \$.post(url, {exampleVariable: idTxtClothType}, function (data)
                    {
                        
                        var varClothType_id = (data[0].clothType_id);
                        var varClothType_name = (data[0].clothType_name);
                        
                              \$(\"#menu-prenda\").append(
                            '<div class=\"panel-heading\" role=\"tab\" id=\"headingTipoPrenda' + varClothType_id + '\">'+
                                '<table width=\"100%\" border=\"0\">'+
                                    '<tr data-id3 = \"' + varClothType_id + '\">'+
                                        '<td{# width=\"80%\"#}>'+
                                            '<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTipoPrenda' + varClothType_id + '\" class=\"tipoPrendaLinkAccordion\" aria-expanded=\"true\" aria-controls=\"collapseTipoPrenda' + varClothType_id + '\" onclick=\"habilitarBotonAgregarPrenda(' + varClothType_id + ');\">'+
                                                varClothType_name +
                                            '</a>'+
                                        '<td width=\"40 px\" align=\"right\">'+
                                            '<a href=\"#collapseExample' + varClothType_id + '\" class=\"btn glyphicon glyphicon-pencil boton-agregar-tipoPrenda-neon boton-agregar-tipoPrenda-neon' + varClothType_id + '\" id=\"boton-agregar-tipoPrenda' + varClothType_id + '\" style=\"display:none\"'+
                                                'role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\" data-toggle=\"collapse\">'+
                                                {# adicionar #}
                                            '</a>'+                                            
                                        '<td width=\"40 px\" align=\"right\" data-id=' + varClothType_id + '>'+
                                            '<a href=\"#\" class=\"btn glyphicon glyphicon-remove boton-eliminar-tipoPrenda-neon\" onclick=\"eliminarTipoPrenda(' + varClothType_id + ');\">'+
                                                {#  x  #}
                                            '</a>'+
                                        '</td>'+
                                    '</tr>'+
                                '</table>'+
                            '</div>'+
            '<div id=\"collapseTipoPrenda' + varClothType_id + '\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTipoPrenda' + varClothType_id + '\">'+
                                '<div class=\"panel-body\">'+

                                    {#desde aqui empieza el submenu#}
                                    '<div class=\"panel-group\" id=\"accordion2\" role=\"tablist\" aria-multiselectable=\"true\">'+
                                        '<div class=\"panel panel-default\">'+




                                            '<div class=\"collapse\" id=\"collapseExample' + varClothType_id + '\">'+

{#                                                    katy perry#}
                                                    '<table width=\"100%\" data-id56=\"' + varClothType_id + '\" border=\"0\">'+
                                                        '<tr>'+
                                                            '<td>'+
                                                                '<input type=\"text\" name=\"txtPrenda\" id=\"idTxtNombrePrenda' + varClothType_id + '\" placeholder=\"Nombre de la Prenda\" style=\"width:100%; height:30px\">'+
                                                            '<td width=\"10px\">'+
                                                            '<td width=\"37px\" align=right>'+
                                                                '<a class=\"btn btn-sm btn-success bapf glyphicon glyphicon-ok\">'+

                                                                '</a>'+
                                                            '</td>'+
                                                        '<tr>'+
                                                            '<td colspan=\"3\">'+
                                                                '<br>'+
                                                            '</td>'+
                                                        '<tr>'+
                                                            '<td colspan=\"3\">'+
                                                                '<textarea rows=\"3\" placeholder=\"Whats up22?\" required style=\"width:100%;\" id=\"idTxtDescripcionPrenda' + varClothType_id + '\"></textarea>'+
                                                            '</td>'+
                                                        '<tr>'+
                                                            '<td colspan=\"3\">'+
                                                                '<div class=\"areaTres\">'+
                                                                    '<div class=\"draggableClass areaUno draggable\">'+
                                                                        '<table border=\"2\" id=\"despiecePrenda\" {#style=\"visibility: hidden;\"#}>'+
                                                                            '<tr>'+
                                                                                '<td width=\"20%\" height=\"100%\">'+
                                                                                    '<span class=\"glyphicon glyphicon-remove btn\" style=\"float: left;\">'+

                                                                                    '</span>'+
                                                                                '<td width=\"80%\" height=\"100%\">'+
                                                                                    {#                                                                                    <input type=\"text\" name=\"txtPrenda\" id=\"idTxtNombrePrenda{{ tipoPrendas.id }}\" placeholder=\"Nombre del despiece\" style=\"float: right; width: 100%;\" rows=\"5\">#}
                                                                                    '<textarea rows=\"3\" placeholder=\" \" class=\"draggableClass areaUno draggable\" required style=\"width:100%; height: 100%; resize: none;\" id=\"idTxtDescripcionPrenda' + varClothType_id + '\"></textarea>'+
                                                                                '</td>'+
                                                                            '</tr>'+
                                                                        '</table>'+
                                                                    '</div>'+
                                                                '</div>'+
                                                                '<div class=\"contenedor\" '+
                                                                     'style=\"background-color: blue; '+
                                                                     'height: 300px; '+
                                                                     'position: relative; \">'+

                                                                    '<div class=\"areaDos droppableClass\" '+
                                                                         'style=\"float: left; '+
                                                                         'overflow: scroll; '+
                                                                         'height: 100%; '+
                                                                         'width: 50%;\">'+
                                                                    '</div>'+

                                                                    '<div style=\"float: left; background-color: greenyellow; '+
                                                                         'width: 50%; position: initial; top: 0; bottom: 0; '+
                                                                         'overflow: scroll; height: 300px;\">'+

                                                                        '<div class=\"containmentWrapper\"'+
                                                                             'style=\"height: 100%; width: 100%;\">'+
                                                                            
                                                                            '<div class=\"draggable2 resizableCutting\" '+
                                                                                 'style=\"opacity: 0.1; background-color: blue; border: black; \">'+
                                                                                '<p>XXXXX</p>'+
                                                                            '</div>'+

                                                                            '<div class=\"draggable2 resizableCutting\" id=\"callejero\" '+
                                                                                 'style=\"opacity: 0.9; background-color: blue; border: black; \"'+
                                                                                 \"onclick=\"+\"document.getElementById('callejero').style.backgroundColor = '#dad';\"+\">\"+
                                                                                '<p>XXXXX</p>'+
                                                                            '</div>'+

                                                                            '<div class=\"draggable2 resizableCutting\" '+
                                                                                \"style='opacity: 0.1; background-color: blue; border: black; '>\"+
                                                                                '<p>XXXXX</p>'+
                                                                            '</div>'+
                                                                            
                                                                        '</div>'+


                                                                    '</div>'+
                                                                '</div>'+
                                                            '</td>'+
                                                        '</tr>'+
                                                    '</table>'+

                                                '</div>'+


                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>');
    {#                        \$(\"#menu-prenda\").append('<option value=\"' + data.id + '\" selected=\"selected\">' + data.nombre + '</option>');#}
    {#                        \$(\".div-tipo-prenda-neon\").load(\"refrescarTableTipoPrenda\");#}
    {#                        alert(\"Ready for the good times\");#}
        
        
            }).fail(function () {
                alert(\"ERROR\");
            });
        }
        

    function eliminarTipoPrenda(idTipoPrenda) {
        {#var form = \$('#eliminar-tipo-prenda');
        var url = form.attr('action');
        \$.post(url, {idTipoPrenda: idTipoPrenda, apellido: \"grillo2\"}, function (result)
        {
            \$.post(\"refrescarTableTipoPrenda\", function (htmlExterno) {
                \$(\".div-tipo-prenda-neon\").html(htmlExterno);
            });
        }).fail(function () {
            alert('ERROR, NO FUNCIONA');
        });#}
                alert(\"Este lo dejamos para después, ya que esta acción no es importante\");
    }   
</script>

<script>

    var contador = 0;
    var idAnterior = 0;
    \$(\".tipoPrendaLinkAccordion\").click(function ()
    {
        var tipoPrenda = \$(this).parents('tr');
        var idActual = tipoPrenda.data('id3');

        habilitarBotonAgregarPrenda(idActual);
    });

    function habilitarBotonAgregarPrenda(idActual)
    {
        
        console.log(idActual);
        contador++;

        if (idAnterior == idActual)
        {
            // se ha dado click sobre el mismo boton

            if (contador % 2 == 0)
            {
                // expandido
                document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'inline';
            } else
            {
                // recogido
                document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'none';
            }
        } else
        {
            if (idAnterior == 0)
            {
                // primera vez que se da click sobre cualquier boton de adicionar prenda

                contador = 0;

                if (contador % 2 == 0)
                {
                    // expandido
                    document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'inline';
                } else
                {
                    // recogido
                    document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'none';
                }
            } else
            {
                contador = 0;

                // borrar el boton del idAnterior
                document.getElementById(\"boton-agregar-tipoPrenda\" + idAnterior).style.display = 'none';

                if (contador % 2 == 0)
                {
                    // expandido
                    document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'inline';
                } else
                {
                    // recogido
                    document.getElementById(\"boton-agregar-tipoPrenda\" + idActual).style.display = 'none';
                }
            }
        }
        idAnterior = idActual;
    }
</script>

<script>
    \$(function () {
        \$(\".droppableClass\").sortable({

        });

        \$(\".areaUno, .areaDos, .areaTres\").disableSelection();
        \$(\".draggable\").draggable({

        });
        \$(\".draggable2\").draggable({
            containment: \".containmentWrapper\",
            scroll: false
        });
    {#        \$(\".resizableSlideBar\").resizable({
                grid: [1, 1],
                maxHeight: 300,
                maxWidth: 500,
                minHeight: 0,
                minWidth: 0
            });#}
                    \$(\".resizable\").resizable({
                        maxHeight: 700,
                        maxWidth: 200,
                        minHeight: 100,
                        minWidth: 200
                    });
                    \$(\".resizableCutting\").resizable({
                        maxHeight: 800,
                        maxWidth: 800,
                        minHeight: 50,
                        minWidth: 50,
                        aspectRatio: 16 / 9,
                        animate: true
                    });

{#                    function cambiarAspecto(){
                        \$(\".callejero\").style.backgroundColor = \"red\";
                    }#}
                    
{#
            );#}
    
    
});


    \$(\".draggableClass\").click(function (){
{#        document.getElementById('despiecePrenda').style.visibility = \"visible\";#}
        
        \$(this).addClass(\"felicidad\");
        alert(\"REPENT!\");
        
    });
    \$(\".areaUno\").click(function (){
        console.log(\"This is an example\");
    });
    \$(\".draggable\").click(function (){
        console.log(\"This is an example22\");
    });
    
    \$(\".felicidad\").click(function (){
        alert(\"REPENT22!\");
    });

   

        \$(\".draggableClass\").draggable({
            connectToSortable: \".droppableClass\",
            helper: \"clone\",
            revert: \"invalid\"
            {#\$(\".callejero\").style.backgroundColor = \"red\";#}
        });

{#    var ElementoObtenido = document.getElementsByClassName(\"callejero\");
    
                        \$(\".callejero\").click( function () {
                            alert(\"2222\");
            
                            ElementoObtenido.style.backgroundColor = \"white\";
                        });#}
</script>

<script>
    \$('.bapf').click(function () {
        alert(\"swish\");
    });
</script>", "HomeBundle:Home:editClothPiece.html.twig", "/Users/martinandresgutierrezsalinas/jbsb92/src/HomeBundle/Resources/views/Home/editClothPiece.html.twig");
    }
}
