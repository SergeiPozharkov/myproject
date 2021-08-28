<?php

namespace UnitTestOrganisationInputChecker;

use App\Helper\OrganisationInputChecker;
use PHPUnit\Framework\TestCase;

class OrganisationInputCheckerTest extends TestCase
{
    private OrganisationInputChecker $organisationInputChecker;

    protected function setUp(): void
    {
        $this->organisationInputChecker = new OrganisationInputChecker(
            "", "", "", "", "", "", ""
        );
    }

    public function testAddressCheck(): void
    {
        $this
            ->assertTrue($this
                ->organisationInputChecker
                ->setAddress(
                    "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p"
                )->addressCheck());

        $this
            ->assertFalse($this
                ->organisationInputChecker
                ->setAddress(
                    "LLLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p"
                )->addressCheck());
    }

    public function testPhoneCheck(): void
    {
        $this
            ->assertTrue($this
                ->organisationInputChecker
                ->setPhone(
                    "+375291234455"
                )->phoneCheck());

        $this
            ->assertFalse($this
                ->organisationInputChecker
                ->setPhone(
                    "+375-29-123-44-55"
                )->phoneCheck());
    }

    public function testNameCheck(): void
    {
        $this
            ->assertTrue($this
                ->organisationInputChecker
                ->setName(
                    "Lorem ipsum dolor sit amet, consectetuer adipiscin"
                )->nameCheck());

        $this
            ->assertFalse($this
                ->organisationInputChecker
                ->setName(
                    "Lorem ipsum dolor sit amet, consectetuer adipiscinf"
                )->nameCheck());
    }

    public function testLegalNameCheck(): void
    {
        $this
            ->assertTrue($this
                ->organisationInputChecker
                ->setLegalName(
                    "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean m"
                )->legalNameCheck());

        $this
            ->assertFalse($this
                ->organisationInputChecker
                ->setLegalName(
                    "LLLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean m"
                )->legalNameCheck());
    }

    public function testWorkingHoursLengthCheck(): void
    {
        $this
            ->assertTrue($this
                ->organisationInputChecker
                ->setWorkingHours(
                    "Пн.-Вс.:08:00-21:00"
                )->workingHoursLengthCheck());

        $this
            ->assertFalse($this
                ->organisationInputChecker
                ->setWorkingHours(
                    "Пн.-Вс.:08:00-211:00"
                )->workingHoursLengthCheck());
    }

    public function testUnpCheck(): void
    {
        $this
            ->assertTrue($this
                ->organisationInputChecker
                ->setUnp(
                    "123456789"
                )->unpCheck());

        $this
            ->assertFalse($this
                ->organisationInputChecker
                ->setUnp(
                    "1234567890"
                )->unpCheck());
    }

    public function testDescriptionCheck(): void
    {
        $this
            ->assertTrue($this
                ->organisationInputChecker
                ->setDescription(
                    "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,"
                )->descriptionCheck());

        $this
            ->assertFalse($this
                ->organisationInputChecker
                ->setDescription(
                    "LLLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,"
                )->descriptionCheck());
    }
}
