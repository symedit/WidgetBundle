<?php

/*
 * This file is part of the SymEdit package.
 *
 * (c) Craig Blanchette <craig.blanchette@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SymEdit\Bundle\WidgetBundle\Model;

use SymEdit\Bundle\WidgetBundle\Widget\Strategy\WidgetStrategyInterface;

interface WidgetInterface
{
    const INCLUDE_ALL = 0;
    const INCLUDE_ONLY = 1;
    const EXCLUDE_ONLY = 2;

    public function getId();

    /**
     * @return WidgetInterface
     * @param  string          $name
     */
    public function setName($name);
    public function getName();

    /**
     * @return WidgetInterface
     * @param  type            $title
     */
    public function setTitle($title);
    public function getTitle();

    public function getArea();

    /**
     * @return WidgetInterface
     * @param  WidgetAreaInterface $area
     */
    public function setArea(WidgetAreaInterface $area);

    /**
     * @return WidgetInterface
     * @param  array           $options
     */
    public function setOptions(array $options);

    /**
     * @return WidgetInterface
     * @param  string          $option
     * @param  mixed           $value
     */
    public function setOption($option, $value);

    /**
     * Get all options
     *
     * @return array $options
     */
    public function getOptions();

    /**
     * Get an option's value
     *
     * @param  string $option
     * @return mixed  $value
     */
    public function getOption($option);

    /**
     * Check if option exists
     *
     * @param  string  $option
     * @return boolean
     */
    public function hasOption($option);

    /**
     * @return WidgetInterface
     * @param  type            $strategyName
     */
    public function setStrategyName($strategyName);

    /**
     * Get the strategy name
     *
     * @return string $strategyName
     */
    public function getStrategyName();

    /**
     * @return WidgetStrategyInterface $strategy
     */
    public function getStrategy();

    /**
     * @return WidgetInterface
     * @param  WidgetStrategyInterface $strategy
     */
    public function setStrategy(WidgetStrategyInterface $strategy);

    /**
     * @return WidgetInterface
     * @param  integer         $visibility
     */
    public function setVisibility($visibility);

    /**
     * Gets the visibility of the widget
     *
     * @return integer $visibility
     */
    public function getVisibility();

    /**
     * @return WidgetInterface
     * @param  array           $assoc
     */
    public function setAssoc(array $assoc);

    /**
     * @return WidgetInterface
     * @param  string          $assoc
     */
    public function addAssoc($assoc);

    /**
     * @return WidgetInterface
     * @param  string          $assoc
     */
    public function removeAssoc($assoc);

    /**
     * Get all associations
     *
     * @return array $assoc
     */
    public function getAssoc();

    public function getWidgetOrder();

    public function setWidgetOrder($widgetOrder);
}
