<?php
namespace Cielo\API30;

interface Environment
{
    /**
     * Gets the environment's Api URL
     *
     * @return string Api URL
     */
    public function getApiUrl();
    
    /**
     * Gets the environment's Api Query URL
     *
     * @return string Api Query URL
     */
    public function getApiQueryURL();
}
