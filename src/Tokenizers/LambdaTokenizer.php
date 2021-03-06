<?php
declare(strict_types = 1);


namespace TextAnalysis\Tokenizers;

/**
 * Roll your own tokenizer with this lamda function
 *
 * @author yooper
 */
class LambdaTokenizer extends TokenizerAbstract
{
    
    /**
     *
     * @var callable
     */
    protected $lambdaFunc = null;

    /**
     * 
     * @param callable $lambdaFunc
     */
    public function __construct($lambdaFunc) 
    {
        $this->lambdaFunc = $lambdaFunc;
    }
    
    
    public function tokenize(string $string)
    {
        return call_user_func($this->lambdaFunc, $string);
    }

}
