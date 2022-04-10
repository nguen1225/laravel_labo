## 初回ビルド
```bash
docker compose up -d --build
```
### 初回プロジェクト作成
```bash
composer create-project --prefer-dist "laravel/laravel=8.*" .
```

- composer create-project --prefer-distとは

  prefer-dist zipでダウンロードするため高速


- composer の–prefer-distってよく使うけど何してる？

  composer create-project コマンドでメモリ足りない問題の対策
