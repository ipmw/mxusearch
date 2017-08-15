<?php

namespace Antsfree\Mxusearch\Console;

use Antsfree\Mxusearch\Mxusearch;
use Illuminate\Console\Command;

class DeleteIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:delete-index {str_ids}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete index by ids. exp: 1,2,3';

    /**
     * DeleteIndex constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $str_ids = $this->argument('str_ids');
        if (!$str_ids) {
            $this->line('请输入需要删除的索引ID');
        }
        $arr_ids = explode(',', $str_ids);
        try {
            $ret = Mxusearch::deleteIndex($arr_ids);
            if ($ret) {
                $this->line('索引删除成功');
            } else {
                $this->error('索引删除失败');
            }
        } catch (\Exception $e) {
            $this->error('讯搜服务异常');
        }
    }
}