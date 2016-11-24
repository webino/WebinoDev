<?php
/**
 * Webino (http://webino.sk/)
 *
 * @link        https://github.com/webino/WebinoDev/ for the canonical source repository
 * @copyright   Copyright (c) 2016 Webino, s. r. o. (http://webino.sk/)
 * @license     BSD-3-Clause
 */

namespace WebinoDev\Test\Selenium\WebDriver;
use PHPWebDriver_Support_WebDriverSelect;

/**
 * For mocking PHPWebDriver_WebDriverSimpleItem
 */
class Select
{
    /**
     * @var PHPWebDriver_Support_WebDriverSelect
     */
    protected $select;

    /**
     * @param \PHPWebDriver_WebDriverElement $elm
     * @param PHPWebDriver_Support_WebDriverSelect|null $select
     */
    public function __construct($elm, PHPWebDriver_Support_WebDriverSelect $select = null)
    {
        $this->select = $select ? $select : new PHPWebDriver_Support_WebDriverSelect($elm);
    }

    /**
     * @return array
     * @throws \PHPWebDriver_NoSuchElementWebDriverError
     */
    public function getOptions()
    {
        return $this->select->__get('options');
    }

    /**
     * @return array
     * @throws \PHPWebDriver_NoSuchElementWebDriverError
     */
    public function getSelectedOptions()
    {
        return $this->select->__get('all_selected_options');
    }

    /**
     * @return array
     * @throws \PHPWebDriver_NoSuchElementWebDriverError
     */
    public function getFirstSelectedValue()
    {
        return $this->select->__get('first_selected_value');
    }

    /**
     * @return array
     * @throws \PHPWebDriver_NoSuchElementWebDriverError
     */
    public function isMultiple()
    {
        return $this->select->__get('is_multiple');
    }

    /**
     * @param string $value
     * @return $this
     * @throws \PHPWebDriver_NoSuchElementWebDriverError
     */
    public function selectByValue($value)
    {
        $this->select->select_by_value($value);
        return $this;
    }

    /**
     * @param int $index
     * @return $this
     * @throws \PHPWebDriver_NoSuchElementWebDriverError
     */
    public function selectByIndex($index)
    {
        $this->select->select_by_index($index);
        return $this;
    }

    /**
     * @param string $text
     * @return $this
     * @throws \PHPWebDriver_NoSuchElementWebDriverError
     */
    public function selectByText($text)
    {
        $this->select->select_by_visible_text($text);
        return $this;
    }

    /**
     * @return $this
     * @throws \PHPWebDriver_NotImplementedError
     */
    public function deselectAll()
    {
        $this->select->deselect_all();
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     * @throws \PHPWebDriver_NotImplementedError
     */
    public function deselectByValue($value)
    {
        $this->select->deselect_by_value($value);
        return $this;
    }

    /**
     * @param int $index
     * @return $this
     * @throws \PHPWebDriver_NotImplementedError
     */
    public function deselectByIndex($index)
    {
        $this->select->deselect_by_index($index);
        return $this;
    }

    /**
     * @param string $text
     * @return $this
     * @throws \PHPWebDriver_NotImplementedError
     */
    public function deselectByText($text)
    {
        $this->select->deselect_by_visible_text($text);
        return $this;
    }
}
