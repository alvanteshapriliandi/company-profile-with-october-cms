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

/* /home/hello/Documents/github/cms/october/company-profile-with-october-cms/themes/hambern-hambern-blank-bootstrap-4/partials/carousel.htm */
class __TwigTemplate_2685f840aac48ebdacd2ea9e9e67c760f416e438ecbe37912c53ec3867f9f277 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img class=\"d-block w-100\" src=\"http://placehold.it/1200x550\" alt=\"First slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"http://placehold.it/1200x550\" alt=\"Second slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"http://placehold.it/1200x550\" alt=\"Third slide\">
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/hello/Documents/github/cms/october/company-profile-with-october-cms/themes/hambern-hambern-blank-bootstrap-4/partials/carousel.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
  </ol>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img class=\"d-block w-100\" src=\"http://placehold.it/1200x550\" alt=\"First slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"http://placehold.it/1200x550\" alt=\"Second slide\">
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"http://placehold.it/1200x550\" alt=\"Third slide\">
    </div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>", "/home/hello/Documents/github/cms/october/company-profile-with-october-cms/themes/hambern-hambern-blank-bootstrap-4/partials/carousel.htm", "");
    }
}
