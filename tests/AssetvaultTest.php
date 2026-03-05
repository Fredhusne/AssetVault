<?php
/**
 * Tests for AssetVault
 */

use PHPUnit\Framework\TestCase;
use Assetvault\Assetvault;

class AssetvaultTest extends TestCase {
    private Assetvault $instance;

    protected function setUp(): void {
        $this->instance = new Assetvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Assetvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
