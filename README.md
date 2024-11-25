# Alura - Design Patterns em PHP: Padrões comportamentais

## Strategy

### O que é

O padrão de projeto Strategy é um padrão comportamental que permite definir uma família de algoritmos, encapsulá-los e torná-los intercambiáveis. Esse padrão permite que o algoritmo varie independentemente dos clientes que o utilizam.

## Quando usar o Padrão Strategy?

Utilize o padrão Strategy quando:
- Você tem várias maneiras de realizar uma ação e deseja encapsular cada uma delas.
- Você deseja evitar o uso de condicionais complexos (como `if` ou `switch-case`) para escolher um algoritmo.
- Você quer que o comportamento de um objeto possa ser alterado em tempo de execução.

## Como funciona?

O padrão Strategy envolve três componentes principais:

1. **Contexto**: A classe que utiliza a estratégia. Ela mantém uma referência a uma instância de uma estratégia.
2. **Estratégia**: Uma interface comum para todas as estratégias concretas.
3. **Estratégias Concretas**: Implementações específicas da interface de estratégia.

### Exemplo de Implementação

```php
// Interface da estratégia
interface Imposto {
    public function calculaImposto(float $orcamento): float;
}

// Estratégia concreta: ICMS
class ICMS implements Imposto {
    public function calculaImposto(float $orcamento): float {
        return $orcamento * 0.10; // 10% do valor
    }
}

// Estratégia concreta: ISS
class ISS implements Imposto {
    public function calculaImposto(float $orcamento): float {
        return $orcamento * 0.06; // 6% do valor
    }
}

// Contexto
class CalculadoraImposto {
    private $imposto;

    public function __construct(Imposto $imposto) {
        $this->imposto = $imposto;
    }

    public function calcular(float $orcamento): float {
        return $this->imposto->calculaImposto($orcamento);
    }
}
// Uso
$orcamento = 1000;
$calculadoraICMS = new CalculadoraImposto(new ICMS());
echo $calculadoraICMS->calcular($orcamento); // Saída: 100

$calculadoraISS = new CalculadoraImposto(new ISS());
echo $calculadoraISS->calcular($orcamento); // Saída: 60
```

---

