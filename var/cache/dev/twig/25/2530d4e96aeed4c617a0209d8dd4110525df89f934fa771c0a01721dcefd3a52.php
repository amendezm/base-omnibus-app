<?php

/* test.html.twig */
class __TwigTemplate_724c19c216d4d1755e0a21277ba8fe053787dc746fb863a22bcf03943a57d1bb extends Twig_Template
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
        $__internal_f96171c239e7f9fe3259400133b1a48cfaf45298d4b78ed3b7efb6f707c247c4 = $this->env->getExtension("native_profiler");
        $__internal_f96171c239e7f9fe3259400133b1a48cfaf45298d4b78ed3b7efb6f707c247c4->enter($__internal_f96171c239e7f9fe3259400133b1a48cfaf45298d4b78ed3b7efb6f707c247c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

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
        
        $__internal_f96171c239e7f9fe3259400133b1a48cfaf45298d4b78ed3b7efb6f707c247c4->leave($__internal_f96171c239e7f9fe3259400133b1a48cfaf45298d4b78ed3b7efb6f707c247c4_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
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
