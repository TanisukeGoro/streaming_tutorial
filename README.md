# 動画のストリーミング配信を自前で実装するチュートリアル用ｖ
## 環境構築

### Git Clone

```bash
# SSH でクローン
git clone git@github.com:TanisukeGoro/streaming_tutorial.git

# HTTPS でクローン
git clone https://github.com/TanisukeGoro/streaming_tutorial.git
```

### 初回Cloneした時に実行するコマンド

```
# Commit メッセージのテンプレートを設定
git config commit.template .commit-template
```

### Docker 起動

```
docker-compose up -d 
```