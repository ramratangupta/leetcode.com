class Solution {
    /**
     * @param {character[][]} board
     * @return {boolean}
     */
    isValidSudoku(board) {
        const rows = new Map();
        const cols = new Map();
        const square = new Map();
        for (let row = 0; row<9; row++){
            for(let col = 0; col<9; col++){
                if(board[row][col]==="."){
                    continue;
                }else{
                    const skey = `${Math.floor(row/3)},${Math.floor(col/3)}}`;
                    if((rows.has(row) && rows.get(row).has(board[row][col]))
                    ||
                    (cols.has(col) && cols.get(col).has(board[row][col]))
                    ||
                    (square.has(skey) && square.get(skey).has(board[row][col]))
                    ){
                        return false;
                    }
                    if(!rows.has(row)){
                        rows.set(row,new Set());
                    }
                    if(!cols.has(col)){
                        cols.set(col,new Set());
                    }
                    if(!square.has(skey)){
                        square.set(skey,new Set());
                    }
                    rows.get(row).add(board[row][col])
                    cols.get(col).add(board[row][col])
                    square.get(skey).add(board[row][col])
                }
            }
        }
        return true;
    }
}

