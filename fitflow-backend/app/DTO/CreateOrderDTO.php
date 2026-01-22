<?php

namespace App\DTO;

use App\Models\Order;

class CreateOrderDTO
{
    public function __construct(
        public readonly string $goal,
        public readonly string $fitnessLevel,
        public readonly ?string $gender,
        public readonly int $age,
        public readonly float $height,
        public readonly float $weight,
        public readonly string $trainingFrequency,
        public readonly string $trainingTime,
        public readonly string $targetDeadline,
        public readonly bool $hasPhysicalLimitation,
        public readonly array $physicalLimitations,
        public readonly array $muscleGroups,
        public readonly string $dietType,
        public readonly bool $hasAllergies,
        public readonly ?string $allergies,
        public readonly string $appetiteLevel,
        public readonly ?string $notes,
        public readonly string $status,
        public readonly float $price,
    ) {}

    /**
     * Factory para criar o DTO a partir do formData
     */
    public static function fromArray(array $formData): self
    {
        return new self(
            goal: $formData['objetivo'],
            fitnessLevel: $formData['nivel'],
            gender: $formData['genero'] ?? null,
            age: (int) $formData['idade'],
            height: (float) $formData['altura'],
            weight: (float) $formData['peso'],
            trainingFrequency: $formData['frequenciaTreino'],
            trainingTime: $formData['horarioTreino'],
            targetDeadline: $formData['prazoPlanejado'],
            hasPhysicalLimitation: ($formData['temLimitacao'] ?? null) === 'Sim',
            physicalLimitations: $formData['tipoLimitacao'] ?? [],
            muscleGroups: $formData['gruposMusculares'] ?? [],
            dietType: $formData['dietaEspecifica'],
            hasAllergies: ($formData['temAlergias'] ?? null) === 'Sim',
            allergies: $formData['alergias'] ?? null,
            appetiteLevel: $formData['apetite'],
            notes: $formData['observacoes'] ?? null,
            status: Order::STATUS_PENDING,
            price: Order::DEFAULT_PRICE,
        );
    }

    /**
     * Converte o DTO para array no formato do Model
     */
    public function toArray(): array
    {
        return [
            'goal' => $this->goal,
            'fitness_level' => $this->fitnessLevel,
            'gender' => $this->gender,
            'age' => $this->age,
            'height' => $this->height,
            'weight' => $this->weight,
            'training_frequency' => $this->trainingFrequency,
            'training_time' => $this->trainingTime,
            'target_deadline' => $this->targetDeadline,
            'has_physical_limitation' => $this->hasPhysicalLimitation,
            'physical_limitations' => $this->physicalLimitations,
            'muscle_groups' => $this->muscleGroups,
            'diet_type' => $this->dietType,
            'has_allergies' => $this->hasAllergies,
            'allergies' => $this->allergies,
            'appetite_level' => $this->appetiteLevel,
            'notes' => $this->notes,
            'status' => $this->status,
            'price' => $this->price,
        ];
    }
}
