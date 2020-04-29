<?php


namespace App\Session;


class Flash
{
    protected $session;
    protected $messages;

    public function __construct(SessionStorage $session){
        $this->session = $session;

        $this->loadToCache();
        $this->clearFlash();
    }

    public function add($key,$value){
        $this->session->set('flash',array_merge(
            $this->session->get('flash') ?? [],[$key => $value]
        ));
    }

    public function has($key){
        return isset($this->messages[$key]);
    }

    public function get($key){
        return $this->has($key) ? $this->messages[$key] : null;
    }

    public function all(){
        return $this->session->get('flash');
    }

    protected function loadToCache(){
        $this->messages = $this->all();
    }

    protected function clearFlash(){
        $this->session->remove('flash');
    }

}