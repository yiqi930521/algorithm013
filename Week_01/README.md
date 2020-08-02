## 五毒学习

1. 第一遍：
    - 5-10分钟：读题+思考。
    - 有思路：自己开始做和写代码；不然，马上看题解。
    - 马上直接写、 leetcode提交

2. 第二遍：
    - 马上直接写、默写(背诵 ，默写好的解法)
    - 多种解法比较(看几个优秀答案，完了去掉cn直接去国际站看高票回答、进入discuss、most vctes排序)
    - 体会、优化(优化核心思想：升维、空间换时间)
3. 第三遍：
    - 24小时后，再重复做题
    - 不同解法的熟练程度，专项练习
4. 第四遍：
    -  过了一周：反复回来练习相同题目
5. 第五遍：
    -  面试前一周恢复性训练

## leetcode解题技巧

1. 列举所有想到的解法
2. 分析暴力破解可优化的地方，找重复、升维
3. 找最近重复子问题，计算机是人类发明的，就是一台简单的重复式机器。
   现在用的程序和算法都是简单的，不涉及任何“人工智能”方面的东西。    

## 写程序或碰到面试题的时候

1. 把题目的意思确认无误
2. 列举所有想到的解法
3. 比较时间和空间复杂度(好的时间复杂度程序会让程序跑起来更快更节约资源)
4. 现在用的程序和算法都是简单的，不涉及任何“人工智能”方面的东西。   

## 数据结构

### 数组arraylist

1. 存储空间连续，查询的时间复杂度为O(1)
2. 插入和删除的时间复杂度为O(n):造成后面元素的挪位  

### 链表linkedlist

1. 修改（或删除）的效率高为O(1)
2. 查询时间复杂度O(n)
3. 结构：{current:val,next:nextElement}，从头指针入口，通过next指针访问其他元素

### 跳表skip list (链表加速)

1. 升纬度，空间换时间，二维，三维
2. 查询时间复杂度为O(log n),从普通链表o(n)降到log2n的时间复杂度
3. 维护成本较高,增加删除是logn
4. 使用案例：redis、LRU缓存

### 栈stack

1. 先进后出、添加删除o(1)、查询o(n)(因为无序结构， 每次查必须遍历一遍)
2. leetcode相关题
    - 有效的括号  
    <https://leetcode-cn.com/problems/valid-parentheses/>
    - 柱状图中最大的矩形  
    <https://leetcode-cn.com/problems/largest-rectangle-in-histogram/>

### 队列queue

1. 先进先出，添加删除o(1)、查询o(n)

### 双项队列(deque)(Double-Ended Queue)（推荐使用）

1. 添加删除o(1)、查询o(n)(因为没有顺序)
2. 可以最前面添加，也可以最前面pop出来。后面同理
3. php ds-deque 扩展
   - https://www.php.net/manual/zh/class.ds-deque.php#class.ds-deque
4. leetcode相关题
    - 最小栈  
    <https://leetcode-cn.com/problems/min-stack/>
    - 滑动窗口最大值  
    <https://leetcode-cn.com/problems/hua-dong-chuang-kou-de-zui-da-zhi-lcof/>
    <https://www.bilibili.com/video/BV1Q741147PF/?spm_id_from=333.788.b_7265636f5f6c697374.2>


## 每周习题

1. 爬楼梯  
  <https://leetcode-cn.com/problems/climbing-stairs/>
2. 加一  
  <https://leetcode-cn.com/problems/plus-one/>
3. 两数之和  
  <https://leetcode-cn.com/problems/two-sum/>
4. 两两交换链表中的节点  
  <https://leetcode-cn.com/problems/swap-nodes-in-pairs/>
5. 合并两个有序链表  
  <https://leetcode-cn.com/problems/merge-two-sorted-lists/>
6. 猜数字游戏  
  <https://leetcode-cn.com/problems/bulls-and-cows/>
7. 设计循环双端队列  
  <https://leetcode-cn.com/problems/design-circular-deque/>