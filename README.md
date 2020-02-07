# 動画のストリーミング配信を自前で実装するチュートリアル用

## 環境構築

### Git Clone

```bash
# SSH でクローン
git clone git@github.com:TanisukeGoro/streaming_tutorial.git

# HTTPS でクローン
git clone https://github.com/TanisukeGoro/streaming_tutorial.git
```

### 初回Cloneした時に実行するコマンド

```bash
# Commit メッセージのテンプレートを設定
git config commit.template .commit-template

# 必要なも
# Composerの高速化を導入済
dokcer-compose exec app composer install
cp .env.example .env
docker-compose exec app php artisan key:generate
```

### Docker 起動

以下のコマンドだけでOK

```bash
docker-compose up -d 
# Composerの高速化を導入済
dokcer-compose exec app composer install
cp .env.example .env
docker-compose exec app php artisan key:generate
```

