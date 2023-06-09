<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $place;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $description;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'events')]
    private $users;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $puserNub;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addEvent($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeEvent($this);
        }

        return $this;
    }
    
    /**
     * hasUser
     *
     * @param  mixed $user
     * @return bool
     */
    public function hasUser(User $user): bool
{
    return $this->users->contains($user);
}

    public function getPuserNub(): ?int
    {
        return $this->puserNub;
    }

    public function setPuserNub(?int $puserNub): self
    {
        $this->puserNub = $puserNub;

        return $this;
    }
    
    /**
     * count_logged_in_users
     *
     * @param  mixed $eventId
     * @param  mixed $entityManager
     * @return void
     */
    function count_logged_in_users($eventId, $entityManager) {
    // Získání entity Event z databáze
    $event = $entityManager->getRepository(Event::class)->find($eventId);

    // Pokud nebyla nalezena žádná událost s daným ID, vrátit 0
    if (!$event) {
        return 0;
    }

    // Získání seznamu uživatelů, kteří jsou přihlášení k události
    $logged_in_users = [];
    foreach ($event->getUsers() as $user) {
        if ($user->isLoggedIn()) {
            $logged_in_users[] = $user;
        }
    }

    // Vrácení počtu přihlášených uživatelů
    return count($logged_in_users);
}
}
