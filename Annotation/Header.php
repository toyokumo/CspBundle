<?php

namespace Toyokumo\CspBundle\Annotation;

class Header
{
    /**
     * @var string|null
     */
    private $default;

    /**
     * @var string|null
     */
    private $script;

    /**
     * @var string|null
     */
    private $style;

    /**
     * @var string|null
     */
    private $frame;

    /**
     * @var string|null
     */
    private $manifest;

    /**
     * @var string|null
     */
    private $img;

    /**
     * @var string|null
     */
    private $font;

    /**
     * @var string|null
     */
    private $connect;

    /**
     * @var string|null
     */
    private $object;

    /**
     * @var string|null
     */
    private $media;

    /**
     * @var string|null
     */
    private $sandbox;

    /**
     * @var string|null
     */
    private $child;

    /**
     * @var string|null
     */
    private $formAction;

    /**
     * @var string|null
     */
    private $frameAncestors;

    /**
     * @var string|null
     */
    private $pluginTypes;

    /**
     * @var string|null
     */
    private $baseUri;

    /**
     * @var string|null
     */
    private $reportUri;

    /**
     * Header constructor.
     * @param null|string $default
     * @param null|string $script
     * @param null|string $style
     * @param null|string $frame
     * @param null|string $manifest
     * @param null|string $img
     * @param null|string $font
     * @param null|string $connect
     * @param null|string $object
     * @param null|string $media
     * @param null|string $sandbox
     * @param null|string $child
     * @param null|string $formAction
     * @param null|string $frameAncestors
     * @param null|string $pluginTypes
     * @param null|string $baseUri
     * @param null|string $reportUri
     */
    public function __construct(
        ?string $default,
        ?string $script,
        ?string $style,
        ?string $frame,
        ?string $manifest,
        ?string $img,
        ?string $font,
        ?string $connect,
        ?string $object,
        ?string $media,
        ?string $sandbox,
        ?string $child,
        ?string $formAction,
        ?string $frameAncestors,
        ?string $pluginTypes,
        ?string $baseUri,
        ?string $reportUri
    ) {
        $this->default = $default;
        $this->script = $script;
        $this->style = $style;
        $this->frame = $frame;
        $this->manifest = $manifest;
        $this->img = $img;
        $this->font = $font;
        $this->connect = $connect;
        $this->object = $object;
        $this->media = $media;
        $this->sandbox = $sandbox;
        $this->child = $child;
        $this->formAction = $formAction;
        $this->frameAncestors = $frameAncestors;
        $this->pluginTypes = $pluginTypes;
        $this->baseUri = $baseUri;
        $this->reportUri = $reportUri;
    }

    /**
     * @param Csp $csp
     */
    public function merge(Csp $csp): void
    {
        if (!$csp->getDefault()) {
            $csp->setDefault($this->default);
        }
        if (!$csp->getScript()) {
            $csp->setScript($this->script);
        }
        if (!$csp->getStyle()) {
            $csp->setStyle($this->style);
        }
        if (!$csp->getFrame()) {
            $csp->setFrame($this->frame);
        }
        if (!$csp->getManifest()) {
            $csp->setManifest($this->manifest);
        }
        if (!$csp->getImg()) {
            $csp->setImg($this->img);
        }
        if (!$csp->getFont()) {
            $csp->setFont($this->font);
        }
        if (!$csp->getConnect()) {
            $csp->setConnect($this->connect);
        }
        if (!$csp->getObject()) {
            $csp->setObject($this->object);
        }
        if (!$csp->getMedia()) {
            $csp->setMedia($this->media);
        }
        if (!$csp->getSandbox()) {
            $csp->setSandbox($this->sandbox);
        }
        if (!$csp->getChild()) {
            $csp->setChild($this->child);
        }
        if (!$csp->getFormAction()) {
            $csp->setFormAction($this->formAction);
        }
        if (!$csp->getFrameAncestors()) {
            $csp->setFrameAncestors($this->frameAncestors);
        }
        if (!$csp->getPluginTypes()) {
            $csp->setPluginTypes($this->pluginTypes);
        }
        if (!$csp->getBaseUri()) {
            $csp->setBaseUri($this->baseUri);
        }
        if (!$csp->getReportUri()) {
            $csp->setReportUri($this->reportUri);
        }
    }

    /**
     * @param Csp $csp
     * @param bool $isReportOnly
     * @return array
     */
    public function generate(Csp $csp, bool $isReportOnly = false): array
    {
        $context = '';
        if ($csp->getDefault()) {
            $context .= 'default-src ' . $csp->getDefault() . ';';
        }
        if ($csp->getScript()) {
            $context .= 'script-src ' . $csp->getScript() . ';';
        }
        if ($csp->getStyle()) {
            $context .= 'style-src ' . $csp->getStyle() . ';';
        }
        if ($csp->getImg()) {
            $context .= 'img-src ' . $csp->getImg() . ';';
        }
        if ($csp->getFont()) {
            $context .= 'font-src ' . $csp->getFont() . ';';
        }
        if ($csp->getFrame()) {
            $context .= 'frame-src ' . $csp->getFrame() . ';';
        }
        if ($csp->getManifest()) {
            $context .= 'manifest-src ' . $csp->getManifest() . ';';
        }
        if ($csp->getConnect()) {
            $context .= 'connect-src ' . $csp->getConnect() . ';';
        }
        if ($csp->getObject()) {
            $context .= 'object-src ' . $csp->getObject() . ';';
        }
        if ($csp->getMedia()) {
            $context .= 'media-src ' . $csp->getMedia() . ';';
        }
        if ($csp->getSandbox()) {
            $context .= 'sandbox ' . $csp->getSandbox() . ';';
        }
        if ($csp->getChild()) {
            $context .= 'child-src ' . $csp->getChild() . ';';
        }
        if ($csp->getFormAction()) {
            $context .= 'form-action ' . $csp->getFormAction() . ';';
        }
        if ($csp->getFrameAncestors()) {
            $context .= 'frame-ancestors ' . $csp->getFrameAncestors() . ';';
        }
        if ($csp->getPluginTypes()) {
            $context .= 'plugin-types ' . $csp->getPluginTypes() . ';';
        }
        if ($csp->getBaseUri()) {
            $context .= 'base-uri ' . $csp->getBaseUri() . ';';
        }
        if ($csp->getReportUri()) {
            $context .= 'report-uri ' . $csp->getReportUri() . ';';
        }
        if ('' === $context) {
            return [];
        }

        if ($isReportOnly) {
            return ['Content-Security-Policy-Report-Only' => $context];
        }
        return [
            'Content-Security-Policy' => $context,
            'X-Content-Security-Policy' => $context,
            'X-WebKit-CSP' => $context
        ];
    }
}
