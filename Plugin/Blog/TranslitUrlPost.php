<?php

namespace SR\UnicodeUrl\Plugin\Blog;

/**
 * Url compatible translit filter
 *
 * Process string based on UTF-8 formatting
 */
class TranslitUrlPost extends \SR\UnicodeUrl\Filter\AbstractTranslitUrl
{

    public function beforeExecute(\Magefan\Blog\Controller\Adminhtml\Post\Save $subject)
    {
        $request = $subject->getRequest();
        $identity = trim($request->getParam('identifier'));
        if ($identity !== '') {
        	$identity = strtr($identity, $this->_convertTable);
            $request->setParam('identifier', $identity);
        }
        return $subject;
    }

}
