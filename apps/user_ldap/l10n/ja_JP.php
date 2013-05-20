<?php $TRANSLATIONS = array(
"Failed to clear the mappings." => "マッピングのクリアに失敗しました。",
"Failed to delete the server configuration" => "サーバ設定の削除に失敗しました",
"The configuration is valid and the connection could be established!" => "設定は有効であり、接続を確立しました！",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "設定は有効ですが、接続に失敗しました。サーバ設定と資格情報を確認して下さい。",
"The configuration is invalid. Please look in the ownCloud log for further details." => "設定は無効です。詳細は ownCloud のログを見て下さい。",
"Deletion failed" => "削除に失敗しました",
"Take over settings from recent server configuration?" => "最近のサーバ設定から設定を引き継ぎますか？",
"Keep settings?" => "設定を保持しますか？",
"Cannot add server configuration" => "サーバ設定を追加できません",
"mappings cleared" => "マッピングをクリアしました",
"Success" => "成功",
"Error" => "エラー",
"Connection test succeeded" => "接続テストに成功しました",
"Connection test failed" => "接続テストに失敗しました",
"Do you really want to delete the current Server Configuration?" => "現在のサーバ設定を本当に削除してもよろしいですか？",
"Confirm Deletion" => "削除の確認",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>警告:</b> user_ldap と user_webdavauth のアプリには互換性がありません。予期せぬ動作をする可能姓があります。システム管理者にどちらかを無効にするよう問い合わせてください。",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>警告:</b> PHP LDAP モジュールがインストールされていません。バックエンドが正しく動作しません。システム管理者にインストールするよう問い合わせてください。",
"Server configuration" => "サーバ設定",
"Add Server Configuration" => "サーバ設定を追加",
"Host" => "ホスト",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "SSL通信しない場合には、プロトコル名を省略することができます。そうでない場合には、ldaps:// から始めてください。",
"Base DN" => "ベースDN",
"One Base DN per line" => "1行に1つのベースDN",
"You can specify Base DN for users and groups in the Advanced tab" => "拡張タブでユーザとグループのベースDNを指定することができます。",
"User DN" => "ユーザDN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "クライアントユーザーのDNは、特定のものに結びつけることはしません。 例えば uid=agent,dc=example,dc=com. だと匿名アクセスの場合、DNとパスワードは空のままです。",
"Password" => "パスワード",
"For anonymous access, leave DN and Password empty." => "匿名アクセスの場合は、DNとパスワードを空にしてください。",
"User Login Filter" => "ユーザログインフィルタ",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "ログインするときに適用するフィルターを定義する。%%uid がログイン時にユーザー名に置き換えられます。",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "%%uid プレースホルダーを利用してください。例 \"uid=%%uid\"",
"User List Filter" => "ユーザリストフィルタ",
"Defines the filter to apply, when retrieving users." => "ユーザーを取得するときに適用するフィルターを定義する。",
"without any placeholder, e.g. \"objectClass=person\"." => "プレースホルダーを利用しないでください。例 \"objectClass=person\"",
"Group Filter" => "グループフィルタ",
"Defines the filter to apply, when retrieving groups." => "グループを取得するときに適用するフィルターを定義する。",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "プレースホルダーを利用しないでください。例 \"objectClass=posixGroup\"",
"Connection Settings" => "接続設定",
"Configuration Active" => "設定はアクティブです",
"When unchecked, this configuration will be skipped." => "チェックを外すと、この設定はスキップされます。",
"Port" => "ポート",
"Backup (Replica) Host" => "バックアップ（レプリカ）ホスト",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "バックアップホストをオプションで指定することができます。メインのLDAP/ADサーバのレプリカである必要があります。",
"Backup (Replica) Port" => "バックアップ（レプリカ）ポート",
"Disable Main Server" => "メインサーバを無効にする",
"When switched on, ownCloud will only connect to the replica server." => "有効にすると、ownCloudはレプリカサーバにのみ接続します。",
"Use TLS" => "TLSを利用",
"Do not use it additionally for LDAPS connections, it will fail." => "LDAPS接続のために追加でそれを利用しないで下さい。失敗します。",
"Case insensitve LDAP server (Windows)" => "大文字／小文字を区別しないLDAPサーバ（Windows）",
"Turn off SSL certificate validation." => "SSL証明書の確認を無効にする。",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "接続がこのオプションでのみ動作する場合は、LDAPサーバのSSL証明書をownCloudサーバにインポートしてください。",
"Not recommended, use for testing only." => "推奨しません、テスト目的でのみ利用してください。",
"Cache Time-To-Live" => "キャッシュのTTL",
"in seconds. A change empties the cache." => "秒。変更後にキャッシュがクリアされます。",
"Directory Settings" => "ディレクトリ設定",
"User Display Name Field" => "ユーザ表示名のフィールド",
"The LDAP attribute to use to generate the user`s ownCloud name." => "ユーザのownCloud名の生成に利用するLDAP属性。",
"Base User Tree" => "ベースユーザツリー",
"One User Base DN per line" => "1行に1つのユーザベースDN",
"User Search Attributes" => "ユーザ検索属性",
"Optional; one attribute per line" => "オプション：1行に1属性",
"Group Display Name Field" => "グループ表示名のフィールド",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "グループのownCloud名の生成に利用するLDAP属性。",
"Base Group Tree" => "ベースグループツリー",
"One Group Base DN per line" => "1行に1つのグループベースDN",
"Group Search Attributes" => "グループ検索属性",
"Group-Member association" => "グループとメンバーの関連付け",
"Special Attributes" => "特殊属性",
"Quota Field" => "クォータフィールド",
"Quota Default" => "クォータのデフォルト",
"in bytes" => "バイト",
"Email Field" => "メールフィールド",
"User Home Folder Naming Rule" => "ユーザのホームフォルダ命名規則",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "ユーザ名を空のままにしてください（デフォルト）。そうでない場合は、LDAPもしくはADの属性を指定してください。",
"Internal Username" => "内部ユーザ名",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder in ownCloud. It is also a port of remote URLs, for instance for all *DAV services. With this setting, the default behaviour can be overriden. To achieve a similar behaviour as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users." => "デフォルトでは、内部ユーザ名はUUID属性から作成されます。これにより、ユーザ名がユニークであり、かつ文字の変換が必要ないことを保証します。内部ユーザ名には、[ a-zA-Z0-9_.@- ] の文字のみが有効であるという制限があり、その他の文字は対応する ASCII コードに変換されるか単に無視されます。そのため、他のユーザ名との衝突の回数が増加するでしょう。内部ユーザ名は、内部的にユーザを識別するために用いられ、また、ownCloudにおけるデフォルトのホームフォルダ名としても用いられます。例えば*DAVサービスのように、リモートURLのポートでもあります。この設定により、デフォルトの振る舞いを再定義します。ownCloud 5 以前と同じような振る舞いにするためには、以下のフィールドにユーザ表示名の属性を入力します。空にするとデフォルトの振る舞いとなります。変更は新しくマッピング（追加）されたLDAPユーザにおいてのみ有効となります。",
"Internal Username Attribute:" => "内部ユーザ名属性:",
"Override UUID detection" => "UUID検出を再定義する",
"By default, ownCloud autodetects the UUID attribute. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users and groups." => "デフォルトでは、ownCloud は UUID 属性を自動的に検出します。UUID属性は、LDAPユーザとLDAPグループを間違いなく識別するために利用されます。また、もしこれを指定しない場合は、内部ユーザ名はUUIDに基づいて作成されます。この設定は再定義することができ、あなたの選択した属性を用いることができます。選択した属性がユーザとグループの両方に対して適用でき、かつユニークであることを確認してください。空であればデフォルトの振る舞いとなります。変更は、新しくマッピング（追加）されたLDAPユーザとLDAPグループに対してのみ有効となります。",
"UUID Attribute:" => "UUID属性:",
"Username-LDAP User Mapping" => "ユーザ名とLDAPユーザのマッピング",
"Clear Username-LDAP User Mapping" => "ユーザ名とLDAPユーザのマッピングをクリアする",
"Clear Groupname-LDAP Group Mapping" => "グループ名とLDAPグループのマッピングをクリアする",
"Test Configuration" => "設定をテスト",
"Help" => "ヘルプ"
);
