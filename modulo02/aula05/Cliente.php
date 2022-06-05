<?php
declare(strict_types=1);

final class Cliente extends Usuario //Classe final não permite herança
{
    private string $dataCadastro;

    /**
     * @return string
     */
    public function getDataCadastro(): string
    {
        return $this->dataCadastro;
    }

    /**
     * @param string $dataCadastro
     */
    public function setDataCadastro(string $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;
    }

}