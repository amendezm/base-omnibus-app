<?php

/* test.html */
class __TwigTemplate_5affc28720f1f1057719238485928e6602e0b1bfc3fd58fc694087a34a6d2144 extends Twig_Template
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
        $__internal_fbd748a4bbcc2cb929b468821aebd9fd0cb33e52428983d5ffb6edecc69d46ee = $this->env->getExtension("native_profiler");
        $__internal_fbd748a4bbcc2cb929b468821aebd9fd0cb33e52428983d5ffb6edecc69d46ee->enter($__internal_fbd748a4bbcc2cb929b468821aebd9fd0cb33e52428983d5ffb6edecc69d46ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>Test</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("test.css"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <div style=\"position: relative;\">
      <div class=\"visible\" style=\"position: absolute; left:0;top:0\" id=\"first\">
        <input placeholder=\"first\" type=\"text\" /><button
          onclick=\"next('second',['first','third','fourth'])\"
        >
          Next
        </button>
      </div>
      <div class=\"hidden\" style=\"position: absolute; left:0;top:0\" id=\"second\">
        <input placeholder=\"second\" type=\"text\" /><button
          onclick=\"next('third',['first','second','fourth'])\"
        >
          Next
        </button>
      </div>
      <div class=\"hidden\" style=\"position: absolute; left:0;top:0\" id=\"third\">
        <input placeholder=\"third\" type=\"text\" /><button
          onclick=\"next('fourth',['first','third','second'])\"
        >
          Next
        </button>
      </div>
      <div class=\"hidden\" style=\"position: absolute; left:0;top:0\" id=\"fourth\">
        <input placeholder=\"fourth\" type=\"text\" /><button
          onclick=\"next('first',['second','third','fourth'])\"
        >
          Next
        </button>
      </div>
    </div>
    <script>
      const next = (visibleId, hiddensIds) => {
        document.getElementById(visibleId).classList.remove(\"hidden\");
        document.getElementById(visibleId).classList.add(\"visible\");
        hiddensIds.forEach(el => {
          document.getElementById(el).classList.remove(\"visible\");
          document.getElementById(el).classList.add(\"hidden\");
        });
      };
    </script>
  </body>
</html>
";
        
        $__internal_fbd748a4bbcc2cb929b468821aebd9fd0cb33e52428983d5ffb6edecc69d46ee->leave($__internal_fbd748a4bbcc2cb929b468821aebd9fd0cb33e52428983d5ffb6edecc69d46ee_prof);

    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>Test</title>*/
/*     <link rel="stylesheet" href="{{ asset('test.css') }}" />*/
/*   </head>*/
/*   <body>*/
/*     <div style="position: relative;">*/
/*       <div class="visible" style="position: absolute; left:0;top:0" id="first">*/
/*         <input placeholder="first" type="text" /><button*/
/*           onclick="next('second',['first','third','fourth'])"*/
/*         >*/
/*           Next*/
/*         </button>*/
/*       </div>*/
/*       <div class="hidden" style="position: absolute; left:0;top:0" id="second">*/
/*         <input placeholder="second" type="text" /><button*/
/*           onclick="next('third',['first','second','fourth'])"*/
/*         >*/
/*           Next*/
/*         </button>*/
/*       </div>*/
/*       <div class="hidden" style="position: absolute; left:0;top:0" id="third">*/
/*         <input placeholder="third" type="text" /><button*/
/*           onclick="next('fourth',['first','third','second'])"*/
/*         >*/
/*           Next*/
/*         </button>*/
/*       </div>*/
/*       <div class="hidden" style="position: absolute; left:0;top:0" id="fourth">*/
/*         <input placeholder="fourth" type="text" /><button*/
/*           onclick="next('first',['second','third','fourth'])"*/
/*         >*/
/*           Next*/
/*         </button>*/
/*       </div>*/
/*     </div>*/
/*     <script>*/
/*       const next = (visibleId, hiddensIds) => {*/
/*         document.getElementById(visibleId).classList.remove("hidden");*/
/*         document.getElementById(visibleId).classList.add("visible");*/
/*         hiddensIds.forEach(el => {*/
/*           document.getElementById(el).classList.remove("visible");*/
/*           document.getElementById(el).classList.add("hidden");*/
/*         });*/
/*       };*/
/*     </script>*/
/*   </body>*/
/* </html>*/
/* */
