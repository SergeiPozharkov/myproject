<?php

namespace UnitTestReviewInputChecker;

use App\Helper\ReviewInputChecker;
use PHPUnit\Framework\TestCase;

class ReviewInputCheckerTest extends TestCase
{
    private ReviewInputChecker $reviewInputChecker;

    protected function setUp(): void
    {
        $this->reviewInputChecker = new ReviewInputChecker("", "", 0);
    }

    public function testReviewCheck(): void
    {
        $this->assertTrue($this
            ->reviewInputChecker
            ->setReview(
                "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p"
            )->reviewCheck());

        $this->assertFalse($this
            ->reviewInputChecker
            ->setReview(
                "LLLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p"
            )->reviewCheck());
    }

    public function testTitleCheck(): void
    {
        $this->assertTrue($this
            ->reviewInputChecker
            ->setTitle(
                "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean m"
            )->titleCheck());

        $this->assertFalse($this
            ->reviewInputChecker
            ->setTitle(
                "LLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis p"
            )->titleCheck());
    }

    public function testOrganisationIdCheck(): void
    {
        $this->assertTrue($this->reviewInputChecker->setOrganisationsId(2)->organisationIdCheck());
    }
}
