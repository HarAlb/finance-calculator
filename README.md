# APR Calculator

Простая библиотека для расчета прибыли и периода накопления по **APR**.  
Позволяет:

- Рассчитывать прибыль за период
- Определять, сколько периодов потребуется, чтобы достичь цели
- Поддерживать различные единицы времени: дни, месяцы, годы

---

## Установка

Через **Composer**:

```bash
composer require haralb/finance-calculator
```

```php
$calc = new AprCalculator(); $calc = new AprCalculator();

$profit = $calc->profit(
    principal: new Money(1222),
    aprPercent: 12,
    units: 30,
    period: Period::DAY
);

echo $profit->amount;
```

```php
$calc = new GoalCalculator();

echo $calc->periodsToTarget(
    start: new Money(2000),
    target: new Money(12000.12),
    aprPercent: 12,
    period: Period::DAY
);
```