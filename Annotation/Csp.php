<?php

namespace Toyokumo\CspBundle\Annotation;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ConfigurationAnnotation;

/**
 * @author ochi51 <ochiai07@gmail.com>
 * @Annotation
 */
final class Csp extends ConfigurationAnnotation
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
    private $img;

    /**
     * @var string|null
     */
    private $font;

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
     * @return string
     */
    public function getAliasName(): string
    {
        return 'csp';
    }

    /**
     * @return bool
     */
    public function allowArray(): bool
    {
        return false;
    }

    /**
     * @return null|string
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    /**
     * @param null|string $default
     * @return self
     */
    public function setDefault(?string $default): self
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getScript(): ?string
    {
        return $this->script;
    }

    /**
     * @param null|string $script
     * @return self
     */
    public function setScript(?string $script): self
    {
        $this->script = $script;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getStyle(): ?string
    {
        return $this->style;
    }

    /**
     * @param null|string $style
     * @return self
     */
    public function setStyle(?string $style): self
    {
        $this->style = $style;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getImg(): ?string
    {
        return $this->img;
    }

    /**
     * @param null|string $img
     * @return self
     */
    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFont(): ?string
    {
        return $this->font;
    }

    /**
     * @param null|string $font
     * @return self
     */
    public function setFont(?string $font): self
    {
        $this->font = $font;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFrame(): ?string
    {
        return $this->frame;
    }

    /**
     * @param null|string $frame
     * @return self
     */
    public function setFrame(?string $frame): self
    {
        $this->frame = $frame;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getManifest(): ?string
    {
        return $this->manifest;
    }

    /**
     * @param null|string $manifest
     * @return self
     */
    public function setManifest(?string $manifest): self
    {
        $this->manifest = $manifest;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getConnect(): ?string
    {
        return $this->connect;
    }

    /**
     * @param null|string $connect
     * @return self
     */
    public function setConnect(?string $connect): self
    {
        $this->connect = $connect;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * @param null|string $object
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->object = $object;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }

    /**
     * @param null|string $media
     * @return self
     */
    public function setMedia(?string $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSandbox(): ?string
    {
        return $this->sandbox;
    }

    /**
     * @param null|string $sandbox
     * @return self
     */
    public function setSandbox(?string $sandbox): self
    {
        $this->sandbox = $sandbox;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getChild(): ?string
    {
        return $this->child;
    }

    /**
     * @param null|string $child
     * @return self
     */
    public function setChild(?string $child): self
    {
        $this->child = $child;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFormAction(): ?string
    {
        return $this->formAction;
    }

    /**
     * @param null|string $formAction
     * @return self
     */
    public function setFormAction(?string $formAction): self
    {
        $this->formAction = $formAction;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFrameAncestors(): ?string
    {
        return $this->frameAncestors;
    }

    /**
     * @param null|string $frameAncestors
     * @return self
     */
    public function setFrameAncestors(?string $frameAncestors): self
    {
        $this->frameAncestors = $frameAncestors;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPluginTypes(): ?string
    {
        return $this->pluginTypes;
    }

    /**
     * @param null|string $pluginTypes
     * @return self
     */
    public function setPluginTypes(?string $pluginTypes): self
    {
        $this->pluginTypes = $pluginTypes;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBaseUri(): ?string
    {
        return $this->baseUri;
    }

    /**
     * @param null|string $baseUri
     * @return self
     */
    public function setBaseUri(?string $baseUri): self
    {
        $this->baseUri = $baseUri;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReportUri(): ?string
    {
        return $this->reportUri;
    }

    /**
     * @param null|string $reportUri
     * @return self
     */
    public function setReportUri(?string $reportUri): self
    {
        $this->reportUri = $reportUri;

        return $this;
    }
}
