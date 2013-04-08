<!DOCTYPE html>
<html>
  <head>
    <?php include "base_meta.php"; ?>
    <title>Login</title>
    <?php include "base_assets.php"; ?>
  </head>
<body>
    <div class="page">
        <?php include "html/nav.php";?>
        <div class="container" id="J_container">
            <div class="content">
                <section>
                    <dl>
                        <dt>收件人</dt>
                        <dd>
                            <input type="text" id="J_reciever" placeholder="只能填写一个抄送人" value="taobao-udc-f2m@ali.com" readonly name="reciever" />
                        </dd>
                        <dt>抄送</dt>
                        <dd>
                            <input type="text" id="J_copy" value="" placeholder="多个抄送人请用分号（;）分开" name="copy"
                            />
                        </dd>
                    </dl>
                    <h3>本周心得与分享</h3>
                    <div class="share" id="J_share" data="1304081000357773307204" contenteditable="true"></div>
                </section>
                <section id="J_section1" data="">
                    <h3>任务一</h3>
                    <table>
                        <tr>
                            <th class="col1">业务名称</th>
                            <th class="col2">合作方</th>
                            <th class="col3">进度</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <select name="category">
                                    <optgroup label="阶段">
                                        <option value="讨论">讨论</option>
                                        <option value="评审">评审</option>
                                        <option value="开发">开发</option>
                                        <option value="重构开发">重构开发</option>
                                        <option value="维护">维护</option>
                                        <option value="业务支持">业务支持</option>
                                    </optgroup>
                                </select>
                                <select name="process">
                                    <optgroup label="进度">
                                        <option value="20">20%</option>
                                        <option value="40">40%</option>
                                        <option value="60">60%</option>
                                        <option value="80">80%</option>
                                        <option value="100">100%</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>工作详情</th>
                            <th>风险</th>
                            <th>下一步</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">图片附件（支持截图粘贴）</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="preview">
                                <ul class="left attach">
                                    <li class="add">
                                        <div class="file">
                                            <input type="file" accept="image/*" class="fileHandle" name="file" />
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>
                <section id="J_section2" data="">
                    <h3>
                        任务二
                    </h3>
                    <table>
                        <tr>
                            <th class="col1">业务名称</th>
                            <th class="col2">合作方</th>
                            <th class="col3">进度</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <select name="category">
                                    <optgroup label="阶段">
                                        <option value="讨论">讨论</option>
                                        <option value="评审">评审</option>
                                        <option value="开发">开发</option>
                                        <option value="重构开发">重构开发</option>
                                        <option value="维护">维护</option>
                                        <option value="业务支持">业务支持</option>
                                    </optgroup>
                                </select>
                                <select name="process">
                                    <optgroup label="进度">
                                        <option value="20">20%</option>
                                        <option value="40">40%</option>
                                        <option value="60">60%</option>
                                        <option value="80">80%</option>
                                        <option value="100">100%</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>工作详情</th>
                            <th>风险</th>
                            <th>下一步</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">图片附件（支持截图粘贴）</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="preview">
                                <ul class="left attach">
                                    <li class="add">
                                        <div class="file">
                                            <input type="file" accept="image/*" class="fileHandle" name="file" />
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>
                <section id="J_section3" data="">
                    <h3>任务三</h3>
                    <table>
                        <tr>
                            <th class="col1">业务名称</th>
                            <th class="col2">合作方</th>
                            <th class="col3">进度</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <select name="category">
                                    <optgroup label="阶段">
                                        <option value="讨论">讨论</option>
                                        <option value="评审">评审</option>
                                        <option value="开发">开发</option>
                                        <option value="重构开发">重构开发</option>
                                        <option value="维护">维护</option>
                                        <option value="业务支持">业务支持</option>
                                    </optgroup>
                                </select>
                                <select name="process">
                                    <optgroup label="进度">
                                        <option value="20">20%</option>
                                        <option value="40">40%</option>
                                        <option value="60">60%</option>
                                        <option value="80">80%</option>
                                        <option value="100">100%</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>工作详情</th>
                            <th>风险</th>
                            <th>下一步</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">图片附件（支持截图粘贴）</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="preview">
                                <ul class="left attach">
                                    <li class="add">
                                        <div class="file">
                                            <input type="file" accept="image/*" class="fileHandle" name="file" />
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>
                <section id="J_section4" data="">
                    <h3>任务四</h3>
                    <table>
                        <tr>
                            <th class="col1">业务名称</th>
                            <th class="col2">合作方</th>
                            <th class="col3">进度</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <select name="category">
                                    <optgroup label="阶段">
                                        <option value="讨论">讨论</option>
                                        <option value="评审">评审</option>
                                        <option value="开发">开发</option>
                                        <option value="重构开发">重构开发</option>
                                        <option value="维护">维护</option>
                                        <option value="业务支持">业务支持</option>
                                    </optgroup>
                                </select>
                                <select name="process">
                                    <optgroup label="进度">
                                        <option value="20">20%</option>
                                        <option value="40">40%</option>
                                        <option value="60">60%</option>
                                        <option value="80">80%</option>
                                        <option value="100">100%</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>工作详情</th>
                            <th>风险</th>
                            <th>下一步</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">图片附件（支持截图粘贴）</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="preview">
                                <ul class="left attach">
                                    <li class="add">
                                        <div class="file">
                                            <input type="file" accept="image/*" class="fileHandle" name="file" />
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>
                <section id="J_section5" data="">
                    <h3>任务五</h3>
                    <table>
                        <tr>
                            <th class="col1">业务名称</th>
                            <th class="col2">合作方</th>
                            <th class="col3">进度</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <select name="category">
                                    <optgroup label="阶段">
                                        <option value="讨论">讨论</option>
                                        <option value="评审">评审</option>
                                        <option value="开发">开发</option>
                                        <option value="重构开发">重构开发</option>
                                        <option value="维护">维护</option>
                                        <option value="业务支持">业务支持</option>
                                    </optgroup>
                                </select>
                                <select name="process">
                                    <optgroup label="进度">
                                        <option value="20">20%</option>
                                        <option value="40">40%</option>
                                        <option value="60">60%</option>
                                        <option value="80">80%</option>
                                        <option value="100">100%</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>工作详情</th>
                            <th>风险</th>
                            <th>下一步</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">图片附件（支持截图粘贴）</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="preview">
                                <ul class="left attach">
                                    <li class="add">
                                        <div class="file">
                                            <input type="file" accept="image/*" class="fileHandle" name="file" />
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>
                <section id="J_section6" data="">
                    <h3>任务六</h3>
                    <table>
                        <tr>
                            <th class="col1">业务名称</th>
                            <th class="col2">合作方</th>
                            <th class="col3">进度</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <select name="category">
                                    <optgroup label="阶段">
                                        <option value="讨论">讨论</option>
                                        <option value="评审">评审</option>
                                        <option value="开发">开发</option>
                                        <option value="重构开发">重构开发</option>
                                        <option value="维护">维护</option>
                                        <option value="业务支持">业务支持</option>
                                    </optgroup>
                                </select>
                                <select name="process">
                                    <optgroup label="进度">
                                        <option value="20">20%</option>
                                        <option value="40">40%</option>
                                        <option value="60">60%</option>
                                        <option value="80">80%</option>
                                        <option value="100">100%</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>工作详情</th>
                            <th>风险</th>
                            <th>下一步</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                            <td>
                                <div class="editor" contenteditable="true"></div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3">图片附件（支持截图粘贴）</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="preview">
                                <ul class="left attach">
                                    <li class="add">
                                        <div class="file">
                                            <input type="file" accept="image/*" class="fileHandle" name="file" />
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>
            </div>
            <div class="prev" onselectstart="return false;">&lt;</div>
            <div class="next" onselectstart="return false;">&gt;</div>
            <div class="tip"></div>
        </div>
        <div class="action">
            <a href="#" id="J_save" class="button">保存</a>
            <a href="index.php?p=do/preview" id="J_preview" class="button" target="_blank">周报预览</a>
        </div>
    </div>
</body>
</html>

