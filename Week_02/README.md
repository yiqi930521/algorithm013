## 数据结构

### 哈希

1. **查询**、**添加、删除**、的时间复杂度为**O(1)**

2. 哈希冲突后，串联起来形成一个**链表**即可

3. leetcode相关题

   - 有效的字母异位词  

     <https://leetcode-cn.com/problems/valid-anagram/>

   - 字母异位词分组  

     <https://leetcode-cn.com/problems/group-anagrams/>

   - 两数之和   

      <https://leetcode-cn.com/problems/two-sum/>

3. list、map、set



### 树、二叉树

1. linked list 是特殊化的tree（next是否指向2个）

2. Tree 是特殊化的Graph（看有没有成圈）

3. 二叉树案例：斐波那契
4. **无序**二叉树时间复杂度：O(n)
5. 树的面试题解法一般都是递归，因为代码类似



### 二叉搜索树binary search tree

1. 特征（为空或者如下）

   - **左**子树上的**所有节点**的值均**小于**它根节点的值

   - **右**子树上的**所有节点**的值均**大于**它根节点的值

   - 以此类推，左、右子树分别为二叉查找树	

2. 遍历方式

   - 前序（Pre-order）：根-左-右

   - 中序（In-order）：左-根-右

   - 后序（Post-order）：左-右-根	

   - 示例：<https://visualgo.net/zh/bst>

2. 结论：中序遍历：升序遍历

2. 查询和操作都是log(n)

2. 糟糕情况下，退化成单链表（1条线），变成O(n)

3. leetcode相关题

   - 二叉树的中序遍历  
   
     <https://leetcode-cn.com/problems/binary-tree-inorder-traversal/>

   - 有效的字母异位词

     <https://leetcode-cn.com/problems/binary-tree-preorder-traversal/>

   - 有效的字母异位词

     <https://leetcode-cn.com/problems/n-ary-tree-postorder-traversal/ >

   - 两数之和

     <https://leetcode-cn.com/problems/n-ary-tree-preorder-traversal/>
   
   - 两数之和

     https://leetcode-cn.com/problems/n-ary-tree-level-order-traversal/

### 堆 Heap

1. Heap解释

   - Heap：可以迅速找到一堆数中最大或最小值的数据结构

   - 大顶堆常见操作：find-max:O(1),delete-max:O(logN),insert:O(logN)或O(1),

   - 后序（Post-order）：左-右-根	

   - 不同实现的比较：https://en.wikipedia.org/wiki/Heap_(data_structure)
1. 二叉堆性质

   - 通过完全二叉树来实现（不是二叉搜索树）
   - 性质一：是一科完全树
   - 性质二：树中任意节点的值总是>=其子节点的值	
   - 二叉堆是堆的一种常见且简单的实现，不是最优的实现。
     - <https://en.wikipedia.org/wiki/Heap_(data_structure)>
1. 二叉堆实现细节：
   - 二叉堆一般通过“数组”实现
   - 第一个元素在索引0，父子节点关系如下
       - 索引i的左孩子索引是(2*i+1)
       - 索引i的右孩子索引是(2*i+2)
       - 索引i的父节点索引是floor((i-1)/2)
   - insert插入操作（HeapifyUp）**O(logN)**
       - 新元素一律先入到堆的尾部
       - 一次向上调整整个堆的结构(一直到跟即可)
   - delete Max删除堆顶操作(HeapifyDown)
       - 将堆尾元素替换到顶部
       - 一次从根部向下调整整个结构（2选1选大的换）

1. leetcode相关题

   - 最小的k个数  
   
     <https://leetcode-cn.com/problems/zui-xiao-de-kge-shu-lcof/>

   - 滑动窗口最大值

     <https://leetcode-cn.com/problems/sliding-window-maximum/>

   - 前 K 个高频元素

     <https://leetcode-cn.com/problems/top-k-frequent-elements/ >
     
### 图
1. 图的属性
   - Graph(V, E);
       - 1.度：入度和出度
       - 2.点与点之间: 连通与否
   - V - vertex: 点
       - 1.有向和无向（单行线）
       - 2.权重（边长）
   - E - edge: 边

1. 图的分类与表示
   - 无向无权图
   - 有向无权图
   - 无向有权图
1. 基于图相关的算法
   - DFS - 递归写法
   - BFS