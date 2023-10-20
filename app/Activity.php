<?php

namespace App;


use Symfony\Component\String\UnicodeString;


class Activity
{
    private string $activity;
    private string $type;
    private int $participants;
    private float $price;
    private string $link;

    public function __construct(string $activity, string $type, int $participants, float $price, string $link)
    {
        $this->activity = $activity;
        $this->type = $type;
        $this->participants = $participants;
        $this->price = $price;
        $this->link = $link;
    }

    public function getActivity(): string
    {
        return $this->activity;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getParticipants(): int
    {
        return $this->participants;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getActivityWithUppercaseFirstLetter(): string
    {
        $activityString = new UnicodeString($this->activity);
        return $activityString->upper()->slice(0, 1) . $activityString->slice(1);
    }
}
