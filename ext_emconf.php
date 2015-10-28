<?php
/*
 * Extension Manager configuration file
 */

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Fix TYPO3 File Collections',
    'description' => 'Allow actually using FileCollections in your models. ' . LF .
        LF .
        'Implements a missing domain model (CategoryBasedFileCollection), provides the necessary TypoScript to make ' .
        'Extbases\' internal objects actually be used and applies a fix for an invalid annotation on the TYPO3 Core.',
    'category' => 'misc',
    'author' => 'Ludwig Rafelsberger',
    'author_email' => 'info@netztechniker.at',
    'author_company' => 'netztechniker.at',
    'clearCacheOnLoad' => true,
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'php' => '5.4',
            'typo3' => '6.2.15',
        ),
    ),
);

