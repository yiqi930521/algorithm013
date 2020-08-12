## 递归

1. 思维要点：
    - 不要人肉进行递归（最大误区）
    - 找到最近最简方法，将其拆解成可重复解决的问题（重复子问题）
    - 数学归纳法思维

1. leetcode相关题

   - 爬楼梯  

     <https://leetcode-cn.com/problems/climbing-stairs/>

   - 括号生成  

     <https://leetcode-cn.com/problems/generate-parentheses/>

   - 翻转二叉树   

     <https://leetcode-cn.com/problems/invert-binary-tree/description/>

   - 验证二叉搜索树   

     <https://leetcode-cn.com/problems/validate-binary-search-tree>

   - 二叉树的最大深度   

     <https://leetcode-cn.com/problems/maximum-depth-of-binary-tree/>

   - 二叉树的最小深度   

     <https://leetcode-cn.com/problems/minimum-depth-of-binary-tree/>

   - 二叉树的序列化与反序列化   

     <https://leetcode-cn.com/problems/serialize-and-deserialize-binary-tree/>

   - 二叉树的最近公共祖先   

     <https://leetcode-cn.com/problems/lowest-common-ancestor-of-a-binary-tree/>

   - 从前序与中序遍历序列构造二叉树   

     <https://leetcode-cn.com/problems/construct-binary-tree-from-preorder-and-inorder-traversal/>

   - 组合   

     <https://leetcode-cn.com/problems/combinations/>

   - 全排列   

     <https://leetcode-cn.com/problems/permutations/>

### 分治Divide & Conquer、回溯Backtracking

1. 分治Divide & Conquer
1. 回溯Backtracking
    ```
    回溯法采用试错的思想，它尝试分步的去解决一个问题。在分步解决问题的过程
    中，当它通过尝试发现现有的分步答案不能得到有效的正确的解答的时候，它将
    取消上一步甚至是上几步的计算，再通过其它的可能的分步解答再次尝试寻找问
    题的答案。
    
    回溯法通常用最简单的递归方法来实现，在反复重复上述的步骤后可能出现两种
    情况：
    
    • 找到一个可能存在的正确的答案；
    
    • 在尝试了所有可能的分步方法后宣告该问题没有答案。
    
    在最坏的情况下，回溯法会导致一次复杂度为指数时间的计算。
    ```
2. leetcode相关题
    - Pow(x, n)  
    <https://leetcode-cn.com/problems/powx-n/>
    - 子集  
    <https://leetcode-cn.com/problems/subsets/>
    - 多数元素（简单、但是高频）  
    <https://leetcode-cn.com/problems/majority-element/description/>
    - 电话号码的字母组合  
    <https://leetcode-cn.com/problems/letter-combinations-of-a-phone-number/>
    - N皇后  
    <https://leetcode-cn.com/problems/n-queens/>