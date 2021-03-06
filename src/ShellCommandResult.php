<?php

namespace Phizzl\PhpShellCommand;


class ShellCommandResult
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var float
     */
    private $execTime;

    /**
     * @var int
     */
    private $exitCode;

    /**
     * @var string
     */
    private $output;

    /**
     * @var string
     */
    private $error;

    /**
     * ShellCommandResult constructor.
     * @param string $status
     * @param float $execTime
     * @param int $exitCode
     * @param string $output
     * @param string $error
     */
    public function __construct($status, $execTime, $exitCode, $output, $error)
    {
        $this->status = $status;
        $this->execTime = $execTime;
        $this->exitCode = $exitCode;
        $this->output = $output;
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return float
     */
    public function getExecTime()
    {
        return $this->execTime;
    }

    /**
     * @return int
     */
    public function getExitCode()
    {
        return $this->exitCode;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
}