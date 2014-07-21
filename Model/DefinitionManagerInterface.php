<?php

namespace Abc\Bundle\FileDistributionBundle\Model;

use Abc\Bundle\FileDistributionBundle\Model\DefinitionInterface;

/**
 * @author Wojciech Ciolko <w.ciolko@gmail.com>
 */
interface DefinitionManagerInterface
{

    /**
     * @return DefinitionInterface
     */
    public function create();


    /**
     * @param DefinitionInterface $definition
     * @return void
     */
    public function update(DefinitionInterface $definition);


    /**
     * @param DefinitionInterface $definition
     * @return void
     */
    public function delete(DefinitionInterface $definition);


    /**
     * Finds an entity by the given criteria.
     *
     * @param array $criteria
     * @return DefinitionInterface
     */
    public function findBy(array $criteria);


    /**
     * Returns a collection with all instances.
     *
     * @return \Traversable
     */
    public function findAll();


    /**
     * Returns the entity fully qualified class name.
     *
     * @return string
     */
    public function getClass();
}