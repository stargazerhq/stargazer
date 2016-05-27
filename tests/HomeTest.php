<?

class HomeTest extends PHPUnit_Extensions_Selenium2TestCase
{

    protected function setUp() {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://stargazer-studiofact.rhcloud.com/');
    }

    public function testTitle() {
        $this->url('http://stargazer-studiofact.rhcloud.com/');
        $this->assertEquals('Stargazer', $this->title());
    }

}