<?php

class Persona {
    protected string $nome;
    protected string $apelidos;
    protected string $mobil;


    public function __construct(string $nome, string $apelidos, string $mobil)
    {
        $this->nome = $nome;
        $this->apelidos = $apelidos;
        $this->mobil = $mobil;
    }

    public function verInformacion() {
        $cadea = implode(" ",[$this->nome, $this->apelidos, "(".$this->mobil.")</br>"]);
        return $cadea;
    }
    

    /**
     * Get the value of nome
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param string $nome
     *
     * @return self
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of apelidos
     *
     * @return string
     */
    public function getApelidos(): string
    {
        return $this->apelidos;
    }

    /**
     * Set the value of apelidos
     *
     * @param string $apelidos
     *
     * @return self
     */
    public function setApelidos(string $apelidos): self
    {
        $this->apelidos = $apelidos;

        return $this;
    }

    /**
     * Get the value of mobil
     *
     * @return string
     */
    public function getMobil(): string
    {
        return $this->mobil;
    }

    /**
     * Set the value of mobil
     *
     * @param string $mobil
     *
     * @return self
     */
    public function setMobil(string $mobil): self
    {
        $this->mobil = $mobil;

        return $this;
    }
}

?>